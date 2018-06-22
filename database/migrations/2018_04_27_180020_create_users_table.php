<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('telefono');
            $table->integer('idrol')->unsigned();
            $table->integer('idagencia')->unsigned();
            $table->string('codigo_trabajador');
            $table->integer('estado');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('idrol')->references('idrol')->on('tb_tipos_roles');
            $table->foreign('idagencia')->references('idagencia')->on('tb_tipos_agencias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_datos_vehiculo');
        Schema::dropIfExists('tb_datos_conductores');
        Schema::dropIfExists('tb_estado_vehiculo');
        Schema::dropIfExists('tb_gasto_combustible');
        Schema::dropIfExists('tb_historico_kilometraje');
        Schema::dropIfExists('tb_mantenimiento_vehiculos');
        Schema::dropIfExists('tb_new_kilometrajes');
        Schema::dropIfExists('tb_conducyvehi');
        Schema::dropIfExists('tb_papeletas');
        Schema::dropIfExists('tb_soat_vehiculo');
        Schema::dropIfExists('users');
    }
}
