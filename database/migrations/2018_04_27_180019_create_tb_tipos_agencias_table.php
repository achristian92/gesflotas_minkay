<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTiposAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipos_agencias', function (Blueprint $table) {
            $table->increments('idagencia');
            $table->string('nombre_agencia');
            $table->string('direccion');          
            $table->integer('iddist')->unsigned();             
            $table->timestamps();    
            $table->foreign('iddist')->references('iddist')->on('tb_ubi_c_distrito');
          
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tipos_agencias');
    }
}
