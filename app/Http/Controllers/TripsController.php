<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BusesRepository;
use App\Repositories\Contracts\HistoriesRepository;
use App\Repositories\Contracts\TripsRepository;
use App\Repositories\Contracts\RouteNamesRepository;
use App\Repositories\Contracts\RoutesRepository;
use App\Repositories\Contracts\RouteStationRepository;
use App\Repositories\Contracts\StaffsRepository;
use App\Repositories\Contracts\StationsRepository;
use App\Repositories\Contracts\CodesRepository;
use App\Repositories\Contracts\SchedulesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isNull;

class TripsController extends Controller
{
    protected $tripsRepository;
    protected $routeNamesRepository;
    protected $routesRepository;
    protected $staffsRepository;
    protected $stationsRepository;
    protected $busesRepository;
    protected $routeStationRepository;
    protected $historiesRepository;
    protected $codesRepository;
    protected $schedulesRepository;

    public function __construct(TripsRepository $tripsRepository, 
                                RouteNamesRepository $routeNamesRepository,
                                RoutesRepository $routesRepository,
                                StaffsRepository $staffsRepository,
                                StationsRepository $stationsRepository,
                                BusesRepository $busesRepository,
                                RouteStationRepository $routeStationRepository,
                                HistoriesRepository $historiesRepository,
                                CodesRepository $codesRepository,
                                SchedulesRepository $schedulesRepository)
    {
        $this->tripsRepository = $tripsRepository;
        $this->routeNamesRepository = $routeNamesRepository;
        $this->routesRepository = $routesRepository;
        $this->staffsRepository = $staffsRepository;
        $this->stationsRepository = $stationsRepository;
        $this->busesRepository = $busesRepository;
        $this->routeStationRepository = $routeStationRepository;
        $this->historiesRepository = $historiesRepository;
        $this->codesRepository = $codesRepository;
        $this->schedulesRepository = $schedulesRepository;
    }

    public function create($date, $route_name_id, $group)
    {
        $route_name = $this->routeNamesRepository->get($route_name_id);
        $staffs = $this->staffsRepository->getAvailableStaffs($route_name_id);
        $working_staffs = $this->staffSchedulesRepository->getWorkingStaff($date);
        $drivers = [];
        $ticket_collectors = [];
        foreach ($staffs as $staff) {
            $check_working = false;
            foreach ($working_staffs as $working_staff) {
                if ($staff->id == $working_staff->staff_id) {
                    $check_working = true;
                    break;
                }
            }
            if ($check_working) continue;

            if ($staff->role_code == 1) {
                $drivers[] = $staff;
            }
            if ($staff->role_code == 2) {
                $ticket_collectors[] = $staff;
            }
        }

        $buses_list = $this->busesRepository->getAvailableBuses($route_name_id);
        $working_buses = $this->busSchedulesRepository->getWorkingBus($date);
        $buses = [];
        foreach ($buses_list as $bus) {
            $check_working = false;
            foreach ($working_buses as $working_bus) {
                if ($bus->id == $working_bus->bus_id) {
                    $check_working = true;
                    break;
                }
            }
            if ($check_working) continue;
            $buses[] = $bus;
        }

        return view('trips.create', compact('route_name', 'group', 'drivers', 'ticket_collectors', 'buses'));
    }

    public function store($date, $route_name_id, $group, Request $request)
    {
        
        $driver_id = $request->driver_id;
        $ticket_collector_id = $request->ticket_collector_id;
        $bus_id = $request->bus_id;
        $date_number = strtotime($date);

        $schedules = $this->schedulesRepository->getGroup($route_name_id, $group);
        // dd($schedules, $route_name_id, $group);
        foreach ($schedules as $schedule) {
            $route = $this->routesRepository->get($schedule->route_id);
            $attributes = [ 
                'route_id' => $schedule->route_id, 
                'date' => $date,
                'number' => $schedule->number,
                'start_time' => $date_number + $schedule->start_time,
                'end_time' => $date_number + $schedule->start_time + $route->total_time,
                'bus_id' => $bus_id,
                'driver_id' => $driver_id,
                'ticket_collector_id' => $ticket_collector_id,
                'operator_id' => 1,
                'next_station_id' => $route->first_station_id,
                'next_station_number' => 1,
                'status' => 1,
                'arrive_at' => $date_number + $schedule->start_time,
                'passenger' => 0
            ];
            $this->tripsRepository->create($attributes);
        }

        $attributes = [ 
            'staff_id' => $driver_id,
            'date' => $date
        ];
        $this->staffSchedulesRepository->create($attributes);

        $attributes = [ 
            'staff_id' => $ticket_collector_id,
            'date' => $date
        ];
        $this->staffSchedulesRepository->create($attributes);
        
        $attributes = [ 
            'bus_id' => $bus_id,
            'date' => $date
        ];
        $this->busSchedulesRepository->create($attributes);
    }

    public function createHistory($id, $station_id) 
    {
        $trip = $this->tripsRepository->get($id);
        $route_id = $trip->route_id;
        $station = $this->routeStationRepository->getByStationId($station_id, $route_id);
        $arrive_time = $station->arrive_time;
        $station_number = $station->number;
        //Nếu là trạm cuối thì update status
        $estimated_time = $trip->start_time + $arrive_time;
        return view('trips.create_history', compact('id', 'station_id', 'station_number', 'route_id', 'estimated_time'));
    }

    public function storeHistory(Request $request) 
    {
        $trip_id = $request->trip_id;
        $station_id = $request->station_id;
        $station_number = $request->station_number;
        $route_id = $request->route_id;
        $trip = $this->tripsRepository->get($trip_id);
        $station = $this->routeStationRepository->getByStationId($station_id, $route_id);
        $arrive_time = $station->arrive_time;
        $estimated_time = $trip->start_time + $arrive_time;
        $actual_time = strtotime('now');
        $attributes = [ 
            'trip_id' => $trip_id, 
            'station_id' => $station_id,
            'station_number' => $station_number,
            'route_id' => $route_id,
            'estimated_time' => $estimated_time,
            'actual_time' => $actual_time
        ];
        $store_success = $this->historiesRepository->create($attributes);
        if ($store_success) Session::flash('success', 'Đã xác nhận đến trạm thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');
        $next_station_number = $station->number + 1;
        $next_station = $this->routeStationRepository->getByNumber($next_station_number, $route_id);
        $next_station_id = $next_station->station_id;
        $arrive_at = $next_station->arrive_time - $station->arrive_time + $actual_time;
        $update_trip_attributes = [ 
            'next_station_id' => $next_station_id, 
            'next_station_number' => $next_station_number,
            'arrive_at' => $arrive_at
        ];
        $update_success = $this->tripsRepository->updateStatus($trip_id, $update_trip_attributes);
        return redirect("trips/$trip_id");
    }

    public function createTicket($id, $station_id) 
    {
        $trip = $this->tripsRepository->get($id);
        $route_id = $trip->route_id;
        $reserved_code = $this->codesRepository->getByTripStation($id, $station_id);
        return view('trips.create_ticket', compact('id', 'station_id', 'route_id', 'reserved_code'));
    }

    public function storeTicket(Request $request) 
    {
        $trip_id = $request->trip_id;
        $station_id = $request->station_id;
        $normal_passenger = $request->normal_passenger;
        $reserved_passenger = $request->reserved_passenger;
        $leave_passenger = $request->leave_passenger;
        $trip = $this->tripsRepository->get($trip_id);
        $current_passenger = $trip->passenger;
        $new_passenger = $current_passenger + $normal_passenger + $reserved_passenger - $leave_passenger;
        $attributes = [
            'normal_passenger' => $normal_passenger,
            'reserved_passenger' => $reserved_passenger,
            'passenger_leave' => $leave_passenger,
            'passenger' => $new_passenger
        ];
        $history = $this->historiesRepository->getByTripStation($trip_id, $station_id);
        $update_success = $this->historiesRepository->update($history->id,$attributes);
        $this->tripsRepository->updatePassenger($trip_id, $new_passenger);
        if ($update_success) Session::flash('success', 'Đã xác nhận đến trạm thành công');
        else Session::flash('fail', 'Đã có lỗi xảy ra');
        return redirect("trips/$trip_id");
    }

    public function info(Request $request)
    {
        $direction = $request->direction;
        $route = $this->routesRepository->getByDirection($request->route_name_id, $direction);
        $station_id = $route->first_station_id;
        $date = $request->date;
        $hour = $request->hour;
        $minute = $request->minute;
        $second = $request->second;
        $time = $date . " " . $hour . ":" . $minute . ":" . $second;
        $timestamp = strtotime($time);
        $staffs = $this->staffsRepository->getAvailableStaffs($station_id, $timestamp);
        $drivers = [];
        $ticket_collectors = [];
        foreach ($staffs as $staff) {
            if ($staff->role_code == 1) {
                $drivers[] = $staff;
            }
            if ($staff->role_code == 2) {
                $ticket_collectors[] = $staff;
            }
        }
        $buses = $this->busesRepository->getAvailableBuses($station_id, $timestamp);

        $time = ($hour * 3600) + ($minute * 60) + ($second * 1);
        $time = $time + $route->total_time;
        
        $end_second = $time % 60;
        $time_in_minute = ($time - $end_second) / 60;
        $end_minute = $time_in_minute % 60;
        $end_hour = ($time_in_minute - $end_minute) / 60;

        if ($end_second < 10) $end_second = "0" . $end_second;
        if ($end_minute < 10) $end_minute = "0" . $end_minute;
        if ($end_hour < 10) $end_hour = "0" . $end_hour;
        return view('trips.info', compact('drivers', 'ticket_collectors', 'buses', 'end_second', 'end_minute', 'end_hour'));
    }

    public function index($route_id)
    {
        $trips = $this->tripsRepository->getAll($route_id);
        $route = $this->routesRepository->get($route_id);
        $first_station = $this->stationsRepository->get($route->first_station_id);
        $last_station = $this->stationsRepository->get($route->last_station_id);
        return view('trips.list', compact('trips', 'route', 'first_station', 'last_station'));
    }

    public function show($id)
    {
        $trip = $this->tripsRepository->get($id);
        $route = $this->routesRepository->get($trip->route_id);
        $histories = $this->historiesRepository->getByTrip($id);
        $last_trip = $this->tripsRepository->getLastTripInRoute($route->route_name_id);
        if ($trip->id == $last_trip->id) $check_last_trip = true;
        else $check_last_trip = false;
        $stations = $this->routeStationRepository->getByTrip($route->id, $id);
        return view('trips.detail', compact('trip', 'route', 'stations', 'check_last_trip'));
    }

    public function delete($id)
    {
        return view('trips.delete', compact('id'));
    }

    public function destroy($id)
    {
        $trip = $this->tripsRepository->get($id);
        $driver = $this->staffsRepository->get($trip->driver_id);
        $ticket_collector = $this->staffsRepository->get($trip->ticket_collector_id);
        $bus = $this->busesRepository->get($trip->bus_id);
        $this->tripsRepository->delete($id);

        return redirect('/stations');
    }
}