<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_station', function (Blueprint $table) {
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('station_id');
            $table->integer('number');
            $table->unsignedBigInteger('arrive_time');
            $table->unsignedBigInteger('last_update_by')->nullable();
            $table->timestamps();
            $table->foreign('route_id')->references('id')->on('routes');
            $table->foreign('station_id')->references('id')->on('stations');
            $table->primary(['route_id', 'station_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_station');
    }
}
