<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('offerheading');
            $table->binary('banner');
            $table->string('vacationcity')->nullable();
            $table->integer('offertourpeople');
            $table->string('trainfrom')->nullable();
            $table->string('trainto')->nullable();
            $table->string('trainclass')->nullable();
            $table->string('flightfrom')->nullable();
            $table->string('flightto')->nullable();
            $table->string('flightclass')->nullable();
            $table->string('hotelname');
            $table->string('hotelroomtype');
            $table->string('touristspot')->nullable();
            $table->string('tourfood')->nullable();
            $table->integer('tourdays');
            $table->string('tourcost');
            $table->timestamps();

            
            $table->integer('hospital')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
