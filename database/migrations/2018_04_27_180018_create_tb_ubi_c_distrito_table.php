<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUbiCDistritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ubi_c_distrito', function (Blueprint $table) {
            $table->increments('iddist');
            $table->string('nom_distrito');
            $table->integer('idprov')->unsigned();      
            $table->foreign('idprov')->references('idprov')->on('tb_ubi_b_provincia');
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
        Schema::dropIfExists('tb_ubi_c_distrito');
    }
}
