<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'route_name_id' => '1',
                'direction' => '1',
                'total_station' => '36',
                'first_station_id' => '1',
                'last_station_id' => '36',
                'total_time' => '10500',
                'status' => '1'
            ],
            [
                'route_name_id' => '1',
                'direction' => '2',
                'total_station' => '34',
                'first_station_id' => '36',
                'last_station_id' => '1',
                'total_time' => '9900',
                'status' => '1'
            ],
            [
                'route_name_id' => '2',
                'direction' => '1',
                'total_station' => '32',
                'first_station_id' => '1',
                'last_station_id' => '86',
                'total_time' => '9300',
                'status' => '1'
            ],
            [
                'route_name_id' => '2',
                'direction' => '2',
                'total_station' => '32',
                'first_station_id' => '86',
                'last_station_id' => '1',
                'total_time' => '9300',
                'status' => '1'
            ],
            [
                'route_name_id' => '3',
                'direction' => '1',
                'total_station' => '27',
                'first_station_id' => '105',
                'last_station_id' => '132',
                'total_time' => '7800',
                'status' => '1'
            ],
            [
                'route_name_id' => '3',
                'direction' => '2',
                'total_station' => '26',
                'first_station_id' => '132',
                'last_station_id' => '105',
                'total_time' => '7800',
                'status' => '1'
            ],
            [
                'route_name_id' => '4',
                'direction' => '1',
                'total_station' => '35',
                'first_station_id' => '1',
                'last_station_id' => '167',
                'total_time' => '10200',
                'status' => '1'
            ],
            [
                'route_name_id' => '4',
                'direction' => '2',
                'total_station' => '33',
                'first_station_id' => '167',
                'last_station_id' => '1',
                'total_time' => '9600',
                'status' => '1'
            ],
            [
                'route_name_id' => '5',
                'direction' => '1',
                'total_station' => '29',
                'first_station_id' => '176',
                'last_station_id' => '196',
                'total_time' => '8400',
                'status' => '1'
            ],
            [
                'route_name_id' => '5',
                'direction' => '2',
                'total_station' => '29',
                'first_station_id' => '196',
                'last_station_id' => '176',
                'total_time' => '8400',
                'status' => '1'
            ]
        ];
        foreach ($routes as $route) {
            DB::table('routes')->insert([
                'route_name_id' => $route['route_name_id'],
                'direction' => $route['direction'],
                'total_station' => $route['total_station'],
                'first_station_id' => $route['first_station_id'],
                'last_station_id' => $route['last_station_id'],
                'total_time' => $route['total_time'],
                'status' => $route['status']
            ]);
        }
    }
}
