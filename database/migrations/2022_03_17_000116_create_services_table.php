<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company');
            $table->string('service_engineer');
            $table->date('date');
            $table->string('csr');
            $table->string('company_1');
            $table->string('company_2');
            $table->string('addres_1');
            $table->string('addres_2');
            $table->string('site_contact');
            $table->string('attention');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('service_request');
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
            
            $table->timestamps();
            $table->softDeletes();

        });
    }

}
