<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routenames = [
            [
            'number' => '01',
            'name' => 'Đà Nẵng - Hội An',
            'time_interval' => '1200',
            'first_route_id' => '1',
            'second_route_id' => '2',
            'status' => '1'
            ],
            [
            'number' => '03',
            'name' => 'Đà Nẵng - Ái Nghĩa',
            'time_interval' => '1800',
            'first_route_id' => '3',
            'second_route_id' => '4',
            'status' => '1'
            ],
            [
            'number' => '04',
            'name' => 'Đà Nẵng - Tam Kỳ',
            'time_interval' => '900',
            'first_route_id' => '5',
            'second_route_id' => '6',
            'status' => '1'
            ],
            [
            'number' => '06',
            'name' => 'Đà Nẵng - Phú Đa',
            'time_interval' => '1800',
            'first_route_id' => '7',
            'second_route_id' => '8',
            'status' => '1'
            ],
            [
            'number' => '09',
            'name' => 'Thọ Quang - Quế Sơn',
            'time_interval' => '2400',
            'first_route_id' => '9',
            'second_route_id' => '10',
            'status' => '1'
            ]
        ];
        foreach ($routenames as $routename) {
            DB::table('route_names')->insert([
                'number' => $routename['number'],
                'name' => $routename['name'],
                'time_interval' => $routename['time_interval'],
                'first_route_id' => $routename['first_route_id'],
                'second_route_id' => $routename['second_route_id'],
                'status' => $routename['status']
            ]);
        }
    }
}
