<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteStasionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route_stations = [
            [
                'route_id' => '1',
                'station_id' => '1',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '1',
                'station_id' => '2',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '1',
                'station_id' => '3',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '1',
                'station_id' => '4',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '1',
                'station_id' => '5',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '1',
                'station_id' => '6',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '1',
                'station_id' => '7',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '1',
                'station_id' => '8',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '1',
                'station_id' => '9',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '1',
                'station_id' => '10',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '1',
                'station_id' => '11',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '1',
                'station_id' => '12',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '1',
                'station_id' => '13',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '1',
                'station_id' => '14',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '1',
                'station_id' => '15',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '1',
                'station_id' => '16',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '1',
                'station_id' => '17',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '1',
                'station_id' => '18',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '1',
                'station_id' => '19',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '1',
                'station_id' => '20',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '1',
                'station_id' => '21',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '1',
                'station_id' => '22',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '1',
                'station_id' => '23',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '1',
                'station_id' => '24',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '1',
                'station_id' => '25',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '1',
                'station_id' => '26',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '1',
                'station_id' => '27',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '1',
                'station_id' => '28',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '1',
                'station_id' => '29',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '1',
                'station_id' => '30',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '1',
                'station_id' => '31',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '1',
                'station_id' => '32',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '1',
                'station_id' => '33',
                'number' => '33',
                'arrive_time' => '9600'
            ],
            [
                'route_id' => '1',
                'station_id' => '34',
                'number' => '34',
                'arrive_time' => '9900'
            ],
            [
                'route_id' => '1',
                'station_id' => '35',
                'number' => '35',
                'arrive_time' => '10200'
            ],
            [
                'route_id' => '1',
                'station_id' => '36',
                'number' => '36',
                'arrive_time' => '10500'
            ],
            [
                'route_id' => '2',
                'station_id' => '1',
                'number' => '34',
                'arrive_time' => '9900'
            ],
            [
                'route_id' => '2',
                'station_id' => '36',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '2',
                'station_id' => '37',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '2',
                'station_id' => '38',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '2',
                'station_id' => '39',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '2',
                'station_id' => '40',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '2',
                'station_id' => '41',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '2',
                'station_id' => '42',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '2',
                'station_id' => '43',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '2',
                'station_id' => '44',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '2',
                'station_id' => '45',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '2',
                'station_id' => '46',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '2',
                'station_id' => '47',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '2',
                'station_id' => '48',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '2',
                'station_id' => '49',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '2',
                'station_id' => '50',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '2',
                'station_id' => '51',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '2',
                'station_id' => '52',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '2',
                'station_id' => '53',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '2',
                'station_id' => '54',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '2',
                'station_id' => '55',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '2',
                'station_id' => '56',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '2',
                'station_id' => '57',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '2',
                'station_id' => '58',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '2',
                'station_id' => '59',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '2',
                'station_id' => '60',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '2',
                'station_id' => '61',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '2',
                'station_id' => '62',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '2',
                'station_id' => '63',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '2',
                'station_id' => '64',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '2',
                'station_id' => '65',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '2',
                'station_id' => '66',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '2',
                'station_id' => '68',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '2',
                'station_id' => '69',
                'number' => '33',
                'arrive_time' => '9600'
            ],
            [
                'route_id' => '3',
                'station_id' => '1',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '3',
                'station_id' => '2',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '3',
                'station_id' => '3',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '3',
                'station_id' => '4',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '3',
                'station_id' => '5',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '3',
                'station_id' => '7',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '3',
                'station_id' => '8',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '3',
                'station_id' => '9',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '3',
                'station_id' => '10',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '3',
                'station_id' => '11',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '3',
                'station_id' => '12',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '3',
                'station_id' => '13',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '3',
                'station_id' => '14',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '3',
                'station_id' => '22',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '3',
                'station_id' => '56',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '3',
                'station_id' => '70',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '3',
                'station_id' => '71',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '3',
                'station_id' => '72',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '3',
                'station_id' => '73',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '3',
                'station_id' => '74',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '3',
                'station_id' => '75',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '3',
                'station_id' => '76',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '3',
                'station_id' => '77',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '3',
                'station_id' => '78',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '3',
                'station_id' => '79',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '3',
                'station_id' => '80',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '3',
                'station_id' => '81',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '3',
                'station_id' => '82',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '3',
                'station_id' => '83',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '3',
                'station_id' => '84',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '3',
                'station_id' => '85',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '3',
                'station_id' => '86',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '4',
                'station_id' => '1',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '4',
                'station_id' => '20',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '4',
                'station_id' => '50',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '4',
                'station_id' => '58',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '4',
                'station_id' => '59',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '4',
                'station_id' => '60',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '4',
                'station_id' => '61',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '4',
                'station_id' => '62',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '4',
                'station_id' => '63',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '4',
                'station_id' => '66',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '4',
                'station_id' => '67',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '4',
                'station_id' => '68',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '4',
                'station_id' => '69',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '4',
                'station_id' => '86',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '4',
                'station_id' => '87',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '4',
                'station_id' => '88',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '4',
                'station_id' => '89',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '4',
                'station_id' => '90',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '4',
                'station_id' => '91',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '4',
                'station_id' => '92',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '4',
                'station_id' => '93',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '4',
                'station_id' => '94',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '4',
                'station_id' => '95',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '4',
                'station_id' => '96',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '4',
                'station_id' => '97',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '4',
                'station_id' => '98',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '4',
                'station_id' => '99',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '4',
                'station_id' => '100',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '4',
                'station_id' => '101',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '4',
                'station_id' => '102',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '4',
                'station_id' => '103',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '4',
                'station_id' => '104',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '5',
                'station_id' => '105',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '5',
                'station_id' => '106',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '5',
                'station_id' => '107',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '5',
                'station_id' => '108',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '5',
                'station_id' => '109',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '5',
                'station_id' => '110',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '5',
                'station_id' => '111',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '5',
                'station_id' => '112',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '5',
                'station_id' => '113',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '5',
                'station_id' => '114',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '5',
                'station_id' => '115',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '5',
                'station_id' => '116',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '5',
                'station_id' => '117',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '5',
                'station_id' => '118',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '5',
                'station_id' => '119',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '5',
                'station_id' => '120',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '5',
                'station_id' => '121',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '5',
                'station_id' => '122',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '5',
                'station_id' => '123',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '5',
                'station_id' => '124',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '5',
                'station_id' => '125',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '5',
                'station_id' => '126',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '5',
                'station_id' => '127',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '5',
                'station_id' => '129',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '5',
                'station_id' => '130',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '5',
                'station_id' => '131',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '5',
                'station_id' => '132',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '6',
                'station_id' => '92',
                'number' => '8',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '6',
                'station_id' => '105',
                'number' => '26',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '6',
                'station_id' => '132',
                'number' => '1',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '6',
                'station_id' => '133',
                'number' => '2',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '6',
                'station_id' => '134',
                'number' => '3',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '6',
                'station_id' => '135',
                'number' => '4',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '6',
                'station_id' => '136',
                'number' => '5',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '6',
                'station_id' => '137',
                'number' => '6',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '6',
                'station_id' => '138',
                'number' => '7',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '6',
                'station_id' => '139',
                'number' => '9',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '6',
                'station_id' => '140',
                'number' => '10',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '6',
                'station_id' => '141',
                'number' => '11',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '6',
                'station_id' => '142',
                'number' => '12',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '6',
                'station_id' => '143',
                'number' => '13',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '6',
                'station_id' => '144',
                'number' => '14',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '6',
                'station_id' => '145',
                'number' => '15',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '6',
                'station_id' => '146',
                'number' => '16',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '6',
                'station_id' => '147',
                'number' => '17',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '6',
                'station_id' => '148',
                'number' => '18',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '6',
                'station_id' => '149',
                'number' => '19',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '6',
                'station_id' => '150',
                'number' => '20',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '6',
                'station_id' => '151',
                'number' => '21',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '6',
                'station_id' => '152',
                'number' => '22',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '6',
                'station_id' => '153',
                'number' => '23',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '6',
                'station_id' => '154',
                'number' => '24',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '6',
                'station_id' => '155',
                'number' => '25',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '7',
                'station_id' => '1',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '7',
                'station_id' => '2',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '7',
                'station_id' => '3',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '7',
                'station_id' => '4',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '7',
                'station_id' => '5',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '7',
                'station_id' => '6',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '7',
                'station_id' => '7',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '7',
                'station_id' => '8',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '7',
                'station_id' => '9',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '7',
                'station_id' => '10',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '7',
                'station_id' => '11',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '7',
                'station_id' => '12',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '7',
                'station_id' => '13',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '7',
                'station_id' => '14',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '7',
                'station_id' => '15',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '7',
                'station_id' => '75',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '7',
                'station_id' => '76',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '7',
                'station_id' => '77',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '7',
                'station_id' => '78',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '7',
                'station_id' => '79',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '7',
                'station_id' => '80',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '7',
                'station_id' => '81',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '7',
                'station_id' => '82',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '7',
                'station_id' => '156',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '7',
                'station_id' => '157',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '7',
                'station_id' => '158',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '7',
                'station_id' => '159',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '7',
                'station_id' => '160',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '7',
                'station_id' => '161',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '7',
                'station_id' => '162',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '7',
                'station_id' => '163',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '7',
                'station_id' => '164',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '7',
                'station_id' => '165',
                'number' => '33',
                'arrive_time' => '9600'
            ],
            [
                'route_id' => '7',
                'station_id' => '166',
                'number' => '34',
                'arrive_time' => '9900'
            ],
            [
                'route_id' => '7',
                'station_id' => '167',
                'number' => '35',
                'arrive_time' => '10200'
            ],
            [
                'route_id' => '8',
                'station_id' => '1',
                'number' => '33',
                'arrive_time' => '9600'
            ],
            [
                'route_id' => '8',
                'station_id' => '57',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '8',
                'station_id' => '58',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '8',
                'station_id' => '59',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '8',
                'station_id' => '60',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '8',
                'station_id' => '61',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '8',
                'station_id' => '62',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '8',
                'station_id' => '63',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '8',
                'station_id' => '64',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '8',
                'station_id' => '65',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '8',
                'station_id' => '66',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '8',
                'station_id' => '67',
                'number' => '30',
                'arrive_time' => '8700'
            ],
            [
                'route_id' => '8',
                'station_id' => '68',
                'number' => '31',
                'arrive_time' => '9000'
            ],
            [
                'route_id' => '8',
                'station_id' => '69',
                'number' => '32',
                'arrive_time' => '9300'
            ],
            [
                'route_id' => '8',
                'station_id' => '90',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '8',
                'station_id' => '91',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '8',
                'station_id' => '92',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '8',
                'station_id' => '93',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '8',
                'station_id' => '94',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '8',
                'station_id' => '95',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '8',
                'station_id' => '96',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '8',
                'station_id' => '97',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '8',
                'station_id' => '156',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '8',
                'station_id' => '167',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '8',
                'station_id' => '168',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '8',
                'station_id' => '169',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '8',
                'station_id' => '170',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '8',
                'station_id' => '171',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '8',
                'station_id' => '172',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '8',
                'station_id' => '173',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '8',
                'station_id' => '174',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '8',
                'station_id' => '175',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '8',
                'station_id' => '212',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '9',
                'station_id' => '10',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '9',
                'station_id' => '61',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '9',
                'station_id' => '62',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '9',
                'station_id' => '63',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '9',
                'station_id' => '64',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '9',
                'station_id' => '65',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '9',
                'station_id' => '66',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '9',
                'station_id' => '68',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '9',
                'station_id' => '176',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '9',
                'station_id' => '177',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '9',
                'station_id' => '178',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '9',
                'station_id' => '179',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '9',
                'station_id' => '180',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '9',
                'station_id' => '181',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '9',
                'station_id' => '182',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '9',
                'station_id' => '183',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '9',
                'station_id' => '184',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '9',
                'station_id' => '185',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '9',
                'station_id' => '186',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '9',
                'station_id' => '187',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '9',
                'station_id' => '188',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '9',
                'station_id' => '189',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '9',
                'station_id' => '190',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '9',
                'station_id' => '191',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '9',
                'station_id' => '192',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '9',
                'station_id' => '193',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '9',
                'station_id' => '194',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '9',
                'station_id' => '195',
                'number' => '28',
                'arrive_time' => '8100'
            ],
            [
                'route_id' => '9',
                'station_id' => '196',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '10',
                'station_id' => '3',
                'number' => '5',
                'arrive_time' => '1200'
            ],
            [
                'route_id' => '10',
                'station_id' => '4',
                'number' => '6',
                'arrive_time' => '1500'
            ],
            [
                'route_id' => '10',
                'station_id' => '5',
                'number' => '7',
                'arrive_time' => '1800'
            ],
            [
                'route_id' => '10',
                'station_id' => '6',
                'number' => '8',
                'arrive_time' => '2100'
            ],
            [
                'route_id' => '10',
                'station_id' => '7',
                'number' => '9',
                'arrive_time' => '2400'
            ],
            [
                'route_id' => '10',
                'station_id' => '8',
                'number' => '10',
                'arrive_time' => '2700'
            ],
            [
                'route_id' => '10',
                'station_id' => '9',
                'number' => '11',
                'arrive_time' => '3000'
            ],
            [
                'route_id' => '10',
                'station_id' => '17',
                'number' => '15',
                'arrive_time' => '4200'
            ],
            [
                'route_id' => '10',
                'station_id' => '18',
                'number' => '16',
                'arrive_time' => '4500'
            ],
            [
                'route_id' => '10',
                'station_id' => '19',
                'number' => '17',
                'arrive_time' => '4800'
            ],
            [
                'route_id' => '10',
                'station_id' => '112',
                'number' => '13',
                'arrive_time' => '3600'
            ],
            [
                'route_id' => '10',
                'station_id' => '113',
                'number' => '14',
                'arrive_time' => '3900'
            ],
            [
                'route_id' => '10',
                'station_id' => '176',
                'number' => '29',
                'arrive_time' => '8400'
            ],
            [
                'route_id' => '10',
                'station_id' => '196',
                'number' => '1',
                'arrive_time' => '0'
            ],
            [
                'route_id' => '10',
                'station_id' => '197',
                'number' => '2',
                'arrive_time' => '300'
            ],
            [
                'route_id' => '10',
                'station_id' => '198',
                'number' => '3',
                'arrive_time' => '600'
            ],
            [
                'route_id' => '10',
                'station_id' => '199',
                'number' => '4',
                'arrive_time' => '900'
            ],
            [
                'route_id' => '10',
                'station_id' => '200',
                'number' => '12',
                'arrive_time' => '3300'
            ],
            [
                'route_id' => '10',
                'station_id' => '201',
                'number' => '18',
                'arrive_time' => '5100'
            ],
            [
                'route_id' => '10',
                'station_id' => '202',
                'number' => '19',
                'arrive_time' => '5400'
            ],
            [
                'route_id' => '10',
                'station_id' => '203',
                'number' => '20',
                'arrive_time' => '5700'
            ],
            [
                'route_id' => '10',
                'station_id' => '204',
                'number' => '21',
                'arrive_time' => '6000'
            ],
            [
                'route_id' => '10',
                'station_id' => '205',
                'number' => '22',
                'arrive_time' => '6300'
            ],
            [
                'route_id' => '10',
                'station_id' => '206',
                'number' => '23',
                'arrive_time' => '6600'
            ],
            [
                'route_id' => '10',
                'station_id' => '207',
                'number' => '24',
                'arrive_time' => '6900'
            ],
            [
                'route_id' => '10',
                'station_id' => '208',
                'number' => '25',
                'arrive_time' => '7200'
            ],
            [
                'route_id' => '10',
                'station_id' => '209',
                'number' => '26',
                'arrive_time' => '7500'
            ],
            [
                'route_id' => '10',
                'station_id' => '210',
                'number' => '27',
                'arrive_time' => '7800'
            ],
            [
                'route_id' => '10',
                'station_id' => '211',
                'number' => '28',
                'arrive_time' => '8100'
            ]
        ];
        foreach ($route_stations as $route_station) {
            DB::table('route_station')->insert([
                'route_id' => $route_station['route_id'],
                'station_id' => $route_station['station_id'],
                'number' => $route_station['number'],
                'arrive_time' => $route_station['arrive_time']
            ]);
        }
    }
}
