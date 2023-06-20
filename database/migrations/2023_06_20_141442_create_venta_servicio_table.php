<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaServicioTable extends Migration
{
    public function up()
    {
        Schema::create('venta_servicio', function (Blueprint $table) {
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('servicio_id');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            // Definir la clave primaria compuesta si es necesario
            // $table->primary(['venta_id', 'servicio_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('venta_servicio');
    }
}
