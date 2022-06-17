<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_map', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('date');
            $table->string('out_time');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('in_time');  
            $table->string('labor');
            $table->string('travel');
            $table->string('standby');  
            $table->unsignedInteger('id_service')->nullable();
            $table->foreign('id_service')->references('id')->on('services')->onDelete('set null');          
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
        Schema::dropIfExists('road_map');
    }
}
