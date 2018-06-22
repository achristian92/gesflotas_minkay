<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUbiADepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ubi_a_departamento', function (Blueprint $table) {
            $table->increments('iddepa');
            $table->string('nom_departamento');
            $table->integer('idzona')->unsigned();
            $table->foreign('idzona')->references('idtipo_zona')->on('tb_tipos_zonas');
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
        Schema::dropIfExists('tb_ubi_a_departamento');
    }
}
