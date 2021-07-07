<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntersectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intersections = [
            [
            'first_route_id' => '1',
            'second_route_id' => '2',
            'station_id' => '36',
            'first_route_number' => '36',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '2',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '34',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '3',
            'station_id' => '1',
            'first_route_number' => '34',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '2',
            'first_route_number' => '2',
            'second_route_number' => '2',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '3',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '4',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '5',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '7',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '11',
            'first_route_number' => '11',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '12',
            'first_route_number' => '12',
            'second_route_number' => '12',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '13',
            'first_route_number' => '13',
            'second_route_number' => '13',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '14',
            'first_route_number' => '14',
            'second_route_number' => '14',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '3',
            'station_id' => '56',
            'first_route_number' => '21',
            'second_route_number' => '16',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '3',
            'station_id' => '22',
            'first_route_number' => '22',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '4',
            'station_id' => '86',
            'first_route_number' => '32',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '50',
            'first_route_number' => '15',
            'second_route_number' => '13',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '4',
            'station_id' => '20',
            'first_route_number' => '20',
            'second_route_number' => '14',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '58',
            'first_route_number' => '23',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '59',
            'first_route_number' => '24',
            'second_route_number' => '21',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '60',
            'first_route_number' => '25',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '61',
            'first_route_number' => '26',
            'second_route_number' => '23',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '62',
            'first_route_number' => '27',
            'second_route_number' => '24',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '63',
            'first_route_number' => '28',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '66',
            'first_route_number' => '31',
            'second_route_number' => '28',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '68',
            'first_route_number' => '32',
            'second_route_number' => '30',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '69',
            'first_route_number' => '33',
            'second_route_number' => '31',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '4',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '32',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '4',
            'station_id' => '1',
            'first_route_number' => '34',
            'second_route_number' => '32',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '4',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '32',
            'status' => '1'
            ],
            [
            'first_route_id' => '5',
            'second_route_id' => '6',
            'station_id' => '132',
            'first_route_number' => '27',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '6',
            'station_id' => '92',
            'first_route_number' => '7',
            'second_route_number' => '8',
            'status' => '1'
            ],
            [
            'first_route_id' => '5',
            'second_route_id' => '6',
            'station_id' => '105',
            'first_route_number' => '1',
            'second_route_number' => '26',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '7',
            'station_id' => '1',
            'first_route_number' => '34',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '7',
            'station_id' => '1',
            'first_route_number' => '32',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '2',
            'first_route_number' => '2',
            'second_route_number' => '2',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '2',
            'first_route_number' => '2',
            'second_route_number' => '2',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '3',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '3',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '4',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '4',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '5',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '5',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '6',
            'first_route_number' => '6',
            'second_route_number' => '6',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '7',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '7',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '11',
            'first_route_number' => '11',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '11',
            'first_route_number' => '11',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '12',
            'first_route_number' => '12',
            'second_route_number' => '12',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '12',
            'first_route_number' => '12',
            'second_route_number' => '12',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '13',
            'first_route_number' => '13',
            'second_route_number' => '13',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '13',
            'first_route_number' => '13',
            'second_route_number' => '13',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '14',
            'first_route_number' => '14',
            'second_route_number' => '14',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '14',
            'first_route_number' => '14',
            'second_route_number' => '14',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '7',
            'station_id' => '15',
            'first_route_number' => '15',
            'second_route_number' => '15',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '75',
            'first_route_number' => '21',
            'second_route_number' => '24',
            'status' => '1'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '76',
            'first_route_number' => '22',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '77',
            'first_route_number' => '23',
            'second_route_number' => '26',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '78',
            'first_route_number' => '24',
            'second_route_number' => '27',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '79',
            'first_route_number' => '25',
            'second_route_number' => '28',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '80',
            'first_route_number' => '26',
            'second_route_number' => '29',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '81',
            'first_route_number' => '27',
            'second_route_number' => '30',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '7',
            'station_id' => '82',
            'first_route_number' => '28',
            'second_route_number' => '31',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '8',
            'station_id' => '167',
            'first_route_number' => '35',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '90',
            'first_route_number' => '5',
            'second_route_number' => '6',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '91',
            'first_route_number' => '6',
            'second_route_number' => '7',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '92',
            'first_route_number' => '7',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '6',
            'second_route_id' => '8',
            'station_id' => '92',
            'first_route_number' => '8',
            'second_route_number' => '8',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '93',
            'first_route_number' => '8',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '94',
            'first_route_number' => '9',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '95',
            'first_route_number' => '10',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '96',
            'first_route_number' => '11',
            'second_route_number' => '12',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '97',
            'first_route_number' => '12',
            'second_route_number' => '13',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '8',
            'station_id' => '156',
            'first_route_number' => '16',
            'second_route_number' => '19',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '57',
            'first_route_number' => '22',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '58',
            'first_route_number' => '23',
            'second_route_number' => '21',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '58',
            'first_route_number' => '20',
            'second_route_number' => '21',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '59',
            'first_route_number' => '24',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '59',
            'first_route_number' => '21',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '60',
            'first_route_number' => '25',
            'second_route_number' => '23',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '60',
            'first_route_number' => '22',
            'second_route_number' => '23',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '61',
            'first_route_number' => '26',
            'second_route_number' => '24',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '61',
            'first_route_number' => '23',
            'second_route_number' => '24',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '62',
            'first_route_number' => '27',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '62',
            'first_route_number' => '24',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '63',
            'first_route_number' => '28',
            'second_route_number' => '26',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '63',
            'first_route_number' => '25',
            'second_route_number' => '26',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '64',
            'first_route_number' => '29',
            'second_route_number' => '27',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '65',
            'first_route_number' => '30',
            'second_route_number' => '28',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '66',
            'first_route_number' => '31',
            'second_route_number' => '29',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '66',
            'first_route_number' => '28',
            'second_route_number' => '29',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '67',
            'first_route_number' => '29',
            'second_route_number' => '30',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '68',
            'first_route_number' => '32',
            'second_route_number' => '31',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '68',
            'first_route_number' => '30',
            'second_route_number' => '31',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '69',
            'first_route_number' => '33',
            'second_route_number' => '32',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '69',
            'first_route_number' => '31',
            'second_route_number' => '32',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '8',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '33',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '8',
            'station_id' => '1',
            'first_route_number' => '34',
            'second_route_number' => '33',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '8',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '33',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '8',
            'station_id' => '1',
            'first_route_number' => '32',
            'second_route_number' => '33',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '8',
            'station_id' => '1',
            'first_route_number' => '1',
            'second_route_number' => '33',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '9',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '19',
            'status' => '1'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '9',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '19',
            'status' => '1'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '9',
            'station_id' => '10',
            'first_route_number' => '10',
            'second_route_number' => '19',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '61',
            'first_route_number' => '26',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '9',
            'station_id' => '61',
            'first_route_number' => '23',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '61',
            'first_route_number' => '24',
            'second_route_number' => '20',
            'status' => '1'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '62',
            'first_route_number' => '27',
            'second_route_number' => '21',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '9',
            'station_id' => '62',
            'first_route_number' => '24',
            'second_route_number' => '21',
            'status' => '0'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '62',
            'first_route_number' => '25',
            'second_route_number' => '21',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '63',
            'first_route_number' => '28',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '9',
            'station_id' => '63',
            'first_route_number' => '25',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '63',
            'first_route_number' => '26',
            'second_route_number' => '22',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '64',
            'first_route_number' => '29',
            'second_route_number' => '23',
            'status' => '0'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '64',
            'first_route_number' => '27',
            'second_route_number' => '23',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '65',
            'first_route_number' => '30',
            'second_route_number' => '24',
            'status' => '0'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '65',
            'first_route_number' => '28',
            'second_route_number' => '24',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '66',
            'first_route_number' => '31',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '9',
            'station_id' => '66',
            'first_route_number' => '28',
            'second_route_number' => '25',
            'status' => '1'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '66',
            'first_route_number' => '29',
            'second_route_number' => '25',
            'status' => '0'
            ],
            [
            'first_route_id' => '2',
            'second_route_id' => '9',
            'station_id' => '68',
            'first_route_number' => '32',
            'second_route_number' => '26',
            'status' => '0'
            ],
            [
            'first_route_id' => '4',
            'second_route_id' => '9',
            'station_id' => '68',
            'first_route_number' => '30',
            'second_route_number' => '26',
            'status' => '1'
            ],
            [
            'first_route_id' => '8',
            'second_route_id' => '9',
            'station_id' => '68',
            'first_route_number' => '31',
            'second_route_number' => '26',
            'status' => '1'
            ],
            [
            'first_route_id' => '9',
            'second_route_id' => '10',
            'station_id' => '196',
            'first_route_number' => '29',
            'second_route_number' => '1',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '5',
            'status' => '1'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '5',
            'status' => '1'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '3',
            'first_route_number' => '3',
            'second_route_number' => '5',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '6',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '6',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '4',
            'first_route_number' => '4',
            'second_route_number' => '6',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '7',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '7',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '5',
            'first_route_number' => '5',
            'second_route_number' => '7',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '6',
            'first_route_number' => '6',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '6',
            'first_route_number' => '6',
            'second_route_number' => '8',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '9',
            'status' => '1'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '7',
            'first_route_number' => '7',
            'second_route_number' => '9',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '8',
            'first_route_number' => '8',
            'second_route_number' => '10',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '3',
            'second_route_id' => '10',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '7',
            'second_route_id' => '10',
            'station_id' => '9',
            'first_route_number' => '9',
            'second_route_number' => '11',
            'status' => '0'
            ],
            [
            'first_route_id' => '5',
            'second_route_id' => '10',
            'station_id' => '112',
            'first_route_number' => '8',
            'second_route_number' => '13',
            'status' => '1'
            ],
            [
            'first_route_id' => '5',
            'second_route_id' => '10',
            'station_id' => '113',
            'first_route_number' => '9',
            'second_route_number' => '14',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '17',
            'first_route_number' => '17',
            'second_route_number' => '15',
            'status' => '1'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '18',
            'first_route_number' => '18',
            'second_route_number' => '16',
            'status' => '0'
            ],
            [
            'first_route_id' => '1',
            'second_route_id' => '10',
            'station_id' => '19',
            'first_route_number' => '19',
            'second_route_number' => '17',
            'status' => '0'
            ],
            [
            'first_route_id' => '9',
            'second_route_id' => '10',
            'station_id' => '176',
            'first_route_number' => '1',
            'second_route_number' => '29',
            'status' => '1'
            ]
        ];
        foreach ($intersections as $intersection) {
            DB::table('intersections')->insert([
                'first_route_id' => $intersection['first_route_id'],
                'second_route_id' => $intersection['second_route_id'],
                'station_id' => $intersection['station_id'],
                'first_route_number' => $intersection['first_route_number'],
                'second_route_number' => $intersection['second_route_number'],
                'status' => $intersection['status']
            ]);
        }
    }
}
