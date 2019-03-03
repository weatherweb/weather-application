<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('weather-details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('longitude');
            $table->string('lattitude');
            $table->string('main');
            $table->string('description');
            $table->string('temperature');
            $table->string('pressure');
            $table->string('humidity');
            $table->string('min_temp');
            $table->string('max_temp');
            $table->string('visibility');
            $table->string('wind_speed');
            $table->string('deg');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
