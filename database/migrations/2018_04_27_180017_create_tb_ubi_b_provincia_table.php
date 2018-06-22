<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUbiBProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ubi_b_provincia', function (Blueprint $table) {
            $table->increments('idprov');
            $table->string('nom_provincia');
            $table->integer('iddepa')->unsigned();      
            $table->foreign('iddepa')->references('iddepa')->on('tb_ubi_a_departamento');
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
        Schema::dropIfExists('tb_ubi_b_provincia');
    }
}
