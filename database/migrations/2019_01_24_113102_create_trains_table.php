<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('from');            
            $table->foreign('from')->references('id')->on('states')->onDelete('cascade');

            $table->unsignedInteger('to');

            $table->unsignedInteger('tclass_id');            
            $table->foreign('tclass_id')->references('id')->on('ticket_classes')->onDelete('cascade');

            $table->integer('cost');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');

        Schema::table("trains", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
