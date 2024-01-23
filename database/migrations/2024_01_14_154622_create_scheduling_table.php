<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduling', function (Blueprint $table) {
            $table->id();
            //User id will be of integer type
            $table->integer('user_id');
            $table->string('name');
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('scheduling_time');
            $table->integer('routedistance_time');
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
        Schema::dropIfExists('scheduling');
    }
}
