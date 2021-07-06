<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\OperationsRepository;
use App\Repositories\Contracts\RouteNamesRepository;
use App\Repositories\Contracts\StaffsRepository;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    protected $routeNamesRepository;
    protected $operationsRepository;
    protected $staffsRepository;

    public function __construct(
        RouteNamesRepository $routeNamesRepository,
        OperationsRepository $operationsRepository,
        StaffsRepository $staffsRepository
    ) {
        $this->routeNamesRepository = $routeNamesRepository;
        $this->operationsRepository = $operationsRepository;
        $this->staffsRepository = $staffsRepository;
    }

    public function create($date)
    {
        $routes = $this->routeNamesRepository->getAll();
        $operators = $this->staffsRepository->getOperators();
        $operations = $this->operationsRepository->getByDate($date);

        // return view('operations.create', compact('routes', 'operators'));
        return response()->json([
            'routes' => $routes,
            'operators' => $operators,
            'operations' => $operations
        ]);
    }

    public function store(Request $request)
    {
        $routes = $this->routeNamesRepository->getAll();
        $date = $request->date;
        foreach ($routes as $route) {
            $input_name = "operator_route_" . $route->id;
            $operators = $request->$input_name;

            $attributes = [
                'route_name_id' => $route->id,
                'date' => $date,
                'operator_id' => $operators
            ];

            $this->operationsRepository->create($attributes);
        }

        return view('operations.create', compact('routes', 'operators'));
    }

    public function index()
    {
        $operations = $this->operationsRepository->getByOperator(4);
        return view('operations.list', compact('operations'));
    }
}
