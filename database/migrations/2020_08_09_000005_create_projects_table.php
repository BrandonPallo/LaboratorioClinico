<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('revisado');
            $table->string('informe');
            $table->date('felaboracion');
            $table->date('frevision');
            $table->string('rev');
            //$table->string('hoja');

            $table->string('empresa');
            $table->string('proyecto');
            $table->string('codigo_proy');
            $table->string('ubicacion');
            $table->string('fentrega');
            $table->string('documento');
            $table->string('revisado_por');
            $table->string('nombre_documento');
            //$table->string('num_total_pag');


            $table->timestamps();
            $table->softDeletes();
        });
    }
}
