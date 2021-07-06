<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\RouteNamesRepository;
use App\Repositories\Contracts\RoutesRepository;
use App\Repositories\Contracts\RouteStationRepository;
use App\Repositories\Contracts\StationsRepository;
use App\Repositories\Contracts\IntersectionsRepository;
use App\Repositories\Contracts\SchedulesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoutesController extends Controller
{
    protected $routesRepository;
    protected $routeNamesRepository;
    protected $routeStationRepository;
    protected $stationsRepository;
    protected $intersectionsRepository;
    protected $schedulesRepository;

    public function __construct(
        RoutesRepository $routesRepository,
        RouteNamesRepository $routeNamesRepository,
        RouteStationRepository $routeStationRepository,
        StationsRepository $stationsRepository,
        IntersectionsRepository $intersectionsRepository,
        SchedulesRepository $schedulesRepository
    ) {
        $this->routesRepository = $routesRepository;
        $this->routeNamesRepository = $routeNamesRepository;
        $this->routeStationRepository = $routeStationRepository;
        $this->stationsRepository = $stationsRepository;
        $this->intersectionsRepository = $intersectionsRepository;
        $this->schedulesRepository = $schedulesRepository;
    }

    public function index()
    {
        $routes = $this->routeNamesRepository->getAll();
        return response()->json($routes);
    }

    public function search($keyword)
    {
        $routes = $this->routeNamesRepository->search($keyword);
        return response()->json($routes);
    }

    public function show($id)
    {
        $route = $this->routeNamesRepository->get($id);
        $route->time_interval /= 60;
        $first_route_stations = $this->routeStationRepository->getByRouteId($route->first_route_id);
        $second_route_stations = $this->routeStationRepository->getByRouteId($route->second_route_id);
        $data = [
            'route' => $route,
            'first_route_stations' => $first_route_stations,
            'second_route_stations' => $second_route_stations
        ];
        // return view('routes.detail', compact('route', 'first_route_stations', 'second_route_stations'));
        return response()->json($data);
    }

    public function showSchedule($route_name_id)
    {
        $route_name = $this->routeNamesRepository->get($route_name_id);
        $first_route = $this->routesRepository->get($route_name->first_route_id);
        $second_route = $this->routesRepository->get($route_name->second_route_id);
        $schedules = $this->schedulesRepository->getRouteName($route_name_id);
        $first_route_schedules = [];
        $second_route_schedules = [];
        foreach ($schedules as $schedule) {
            if ($schedule->route_id == $first_route->id) {
                $first_route_schedules[] = (object) array(
                    'route_id' => $schedule->route_id,
                    'number' => $schedule->number,
                    'start_time' => $schedule->start_time,
                    'end_time' => $schedule->start_time + $first_route->total_time,
                    'group_number' => $schedule->group_number
                );
            } elseif ($schedule->route_id == $second_route->id) {
                $second_route_schedules[] = (object) array(
                    'route_id' => $schedule->route_id,
                    'number' => $schedule->number,
                    'start_time' => $schedule->start_time,
                    'end_time' => $schedule->start_time + $second_route->total_time,
                    'group_number' => $schedule->group_number
                );
            }
        }
        $data = [
            'route_name' => $route_name,
            'first_route_schedules' => $first_route_schedules,
            'second_route_schedules' => $second_route_schedules
        ];
        return response()->json($data); 
    }

    public function createname()
    {
        return view('routes.createname');
    }

    public function create()
    {
        $stations = $this->stationsRepository->getAll();
        $routenames = $this->routeNamesRepository->getIncomplete();
        return response()->json([
            'stations' => $stations,
            'routenames' => $routenames
        ]);
    }

    public function createStation($id, $number)
    {
        $list_stations = $this->stationsRepository->getAll();
        $route = $this->routesRepository->get($id);
        $stations = $this->routeStationRepository->getByRouteId($id);
        return view('routes.createstation', compact('id', 'number', 'route', 'stations', 'list_stations'));
    }

    public function storename(Request $request)
    {
        $time_interval = $request->time_interval * 60;
        $attributes = [
            'number' => $request->number,
            'name' => $request->name,
            'time_interval' => $time_interval,
            'status' => 1
        ];
        $store_success = $this->routeNamesRepository->create($attributes);

        if ($store_success) Session::flash('success', 'Đã thêm thông tin tuyến đường thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');

        return;
    }

    public function storeStation($id, $number, Request $request)
    {
        $station_id = $request->station_id;
        if ($number == 1) {
            $time = 0;
            $attributes = [
                'first_station_id' => $station_id
            ];
            $this->routesRepository->updateFirst($id, $attributes);
        } else {
            $time = $this->routeStationRepository->getByNumber($number - 1, $id)->arrive_time;
        }
        $minute = $request->minute;
        // $second = $request->second;
        $time += $minute * 60;

        $route = $this->routesRepository->get($id);

        $direction = $route->direction;
        $route_name_id = $route->route_name_id;
        $route_number = $this->routeNamesRepository->get($route_name_id)->number;
        $this->stationsRepository->insertRoute($station_id, $id, $route_number, $direction);

        $attributes = [
            'total_station' => $number,
            'last_station_id' => $station_id,
            'total_time' => $time
        ];
        $this->routesRepository->updateLast($id, $attributes);
        $route_stations = $this->routeStationRepository->getRoutesByStation($station_id);
        $intersections = $this->intersectionsRepository->getByNumber($id, $number - 1);
        $prev_array = [];
        foreach ($intersections as $intersection) {
            if ($intersection->first_route_id == $id) {
                $prev_array[$intersection->second_route_id] = $intersection->second_route_number;
            }
            if ($intersection->second_route_id == $id) {
                $prev_array[$intersection->first_route_id] = $intersection->first_route_number;
            }
        }

        foreach ($route_stations as $route_station) {
            if (isset($prev_array[$route_station->route_id]) && ($prev_array[$route_station->route_id] == $route_station->number - 1)) {
                $attributes = [
                    'first_route_id' => $route_station->route_id,
                    'second_route_id' => $id,
                    'station_id' => $station_id,
                    'first_route_number' => $route_station->number,
                    'second_route_number' => $number,
                    'status' => 0
                ];
                $this->intersectionsRepository->create($attributes);
            } else {
                $attributes = [
                    'first_route_id' => $route_station->route_id,
                    'second_route_id' => $id,
                    'station_id' => $station_id,
                    'first_route_number' => $route_station->number,
                    'second_route_number' => $number,
                    'status' => 1
                ];
                $this->intersectionsRepository->create($attributes);
            }
        }

        $attributes = [
            'route_id' => $id,
            'station_id' => $station_id,
            'number' => $number,
            'arrive_time' => $time
        ];
        $this->routeStationRepository->create($attributes);

        // return redirect('/routes/create/' . $id . '/' . ($number + 1));
        return response()->json('ok');
    }

    public function findPath($start_station_id, $target_station_id)
    {
        $intersections = $this->intersectionsRepository->getAvailable();
        $start_routes = $this->routeStationRepository->getRoutesByStation($start_station_id);
        $target_routes = $this->routeStationRepository->getRoutesByStation($target_station_id);
        $routes = $this->routesRepository->getAll();

        $route_limits = [];
        foreach ($routes as $route) {
            $route_limits[$route->id] = $route->total_station;
        }

        $node = [];
        $node[0] = [];
        foreach ($start_routes as $start_route) {
            $node[0][] = [$start_route->route_id, $start_route->number, $start_route->station_id];
            $route_limits[$start_route->route_id] = $start_route->number;
        }

        $i = 0;
        $get_path = [];

        for ($j = 0; $j < count($node[$i]); $j++) {
            foreach ($target_routes as $target_route) {
                if ($node[$i][$j][0] == $target_route->route_id && $node[$i][$j][1] < $target_route->number) {
                    $get_path[] = [$i, $j];
                }
            }
        }
        if (count($get_path) == 0) {
            do {
                $temp_limits = [];
                $node[$i + 1] = [];
                for ($j = 0; $j < count($node[$i]); $j++) {
                    foreach ($intersections as $intersection) {
                        if (($node[$i][$j][0] == $intersection->first_route_id) && ($node[$i][$j][1] < $intersection->first_route_number)) {
                            if ($intersection->second_route_number < $route_limits[$intersection->second_route_id]) {
                                $node[$i + 1][] = [$intersection->second_route_id, $intersection->second_route_number, $intersection->station_id, $j];
                                $temp_limits[] = [$intersection->second_route_id, $intersection->second_route_number];
                                foreach ($target_routes as $target_route) {
                                    if ($intersection->second_route_id == $target_route->route_id && $intersection->second_route_number < $target_route->number) {
                                        $get_path[] = [$i + 1, count($node[$i + 1]) - 1];
                                    }
                                }
                            }
                        } elseif (($node[$i][$j][0] == $intersection->second_route_id) && ($node[$i][$j][1] < $intersection->second_route_number)) {
                            if ($intersection->first_route_number < $route_limits[$intersection->first_route_id]) {
                                $node[$i + 1][] = [$intersection->first_route_id, $intersection->first_route_number, $intersection->station_id, $j];
                                $temp_limits[] = [$intersection->first_route_id, $intersection->first_route_number];
                                foreach ($target_routes as $target_route) {
                                    if ($intersection->first_route_id == $target_route->route_id && $intersection->first_route_number < $target_route->number) {
                                        $get_path[] = [$i + 1, count($node[$i + 1]) - 1];
                                    }
                                }
                            }
                        }
                    }
                }
                if (count($get_path) > 0) break;
                foreach ($temp_limits as $temp_limit) {
                    $route_limits[$temp_limit[0]] = $temp_limit[1];
                }
                $i += 1;
            } while (count($node[$i]) > 0);
        }

        $paths = [];
        if (count($get_path) > 0) {
            $edges = [];
            $index = $get_path[0][1];
            for ($i = count($node) - 1; $i >= 0; $i--) {
                $route_id = $node[$i][$index][0];
                $station_id = $node[$i][$index][2];
                $route = $this->routesRepository->get($route_id);
                $station = $this->stationsRepository->get($station_id);
                $edges[$i] = (object) array(
                    'station_name' => $station->name,
                    'route_number' => $route->number,
                    'route_name' => $route->name,
                    'route_direction' => $route->direction,
                    'station_id' => $station_id,
                    'route_id' => $route_id
                );
                if ($i > 0) {
                    $index = $node[$i][$index][3];
                }
            }

            $target_station = $this->stationsRepository->get($target_station_id);
            $edges[] = (object) array(
                'station_name' => $target_station->name,
                'station_id' => $target_station_id
            );
            for ($i = 0; $i < count($edges) - 1; $i++) {
                $first_station = $this->routeStationRepository->getByStationId($edges[$i]->station_id, $edges[$i]->route_id);
                $first_station_time = $first_station->arrive_time;
                $second_station = $this->routeStationRepository->getByStationId($edges[$i + 1]->station_id, $edges[$i]->route_id);
                $second_station_time = $second_station->arrive_time;
                $time = $second_station_time - $first_station_time;
                $paths[$i] = (object) array(
                    'first_station' => $edges[$i]->station_name,
                    'route_number' => $edges[$i]->route_number,
                    'route_name' => $edges[$i]->route_name,
                    'route_direction' => $edges[$i]->route_direction,
                    'second_station' => $edges[$i + 1]->station_name,
                    'time' => $time
                );
            }
        }

        // dd($node, $get_path, $paths);

        // return view('routes.findpath', compact('paths'));
        return response()->json($paths);
    }

    public function store($routename_id, $direction)
    {
        $attributes = [
            'route_name_id' => $routename_id,
            'direction' => $direction,
            'total_station' => 0,
            'first_station_id' => 1,
            'last_station_id' => 1,
            'total_time' => 0,
            'status' => 1
        ];
        $route_id = $this->routesRepository->create($attributes);
        $store_success = $route_id;

        $attributes = [
            'route_id' => $route_id,
            'direction' => $direction
        ];
        $this->routeNamesRepository->updateRoute($routename_id, $attributes);


        if ($store_success) Session::flash('success', 'Đã thêm thông tin tuyến đường thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');

        return response()->json('ok');
    }

    public function edit($id)
    {
        $routename = $this->routeNamesRepository->get($id);
        return view('routes.edit', compact('routename'));
    }

    public function update($id, Request $request)
    {
        $time_interval = $request->time_interval * 60;
        $attributes = [
            'number' => $request->number,
            'name' => $request->name,
            'time_interval' => $time_interval
        ];
        $edit_success = $this->routeNamesRepository->update($id, $attributes);

        if ($edit_success) Session::flash('success', 'Đã chỉnh sửa thông tin tuyến đường thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');


        // return redirect('/routes/' . $id);
        return response()->json('ok');
    }

    public function delete($id)
    {
        $route = $this->routesRepository->get($id);
        $id = $route->route_name_id;
        return view('routes.delete', compact('id'));
    }

    public function destroy($id)
    {
        $routes = $this->routesRepository->getByRouteName($id);
        foreach ($routes as $route) {
            $this->routesRepository->delete($route->id);
        }
        $this->routeNamesRepository->delete($id);

        return redirect('/routes');
    }
}
