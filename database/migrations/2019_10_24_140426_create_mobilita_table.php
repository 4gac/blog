<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilita', function (Blueprint $table) {
            $table->increments('idmobility');
            $table->string('nazov_mobility');
            $table->date('zaciatok_mobility')->nullable();
            $table->date('koniec_mobility')->nullable();
            $table->integer('pouzivatel_idpouzivatel')->unsigned();
            $table->integer('vyzva_idvyzva')->unsigned();
            $table->foreign('pouzivatel_idpouzivatel')->references('idpouzivatel')->on('pouzivatel');
            $table->foreign('vyzva_idvyzva')->references('idvyzva')->on('vyzva');
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
        Schema::dropIfExists('mobilita');
    }
}
