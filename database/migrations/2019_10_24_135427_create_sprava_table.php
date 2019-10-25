<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpravaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprava', function (Blueprint $table) {
            $table->increments('idsprava');
            $table->integer('pouzivatel_idpouzivatel')->unsigned();
            // mobilita_idmobilita ma definovaný cudzi kľúč v update migracii na konci
            $table->integer('mobilita_idmobilita')->unsigned();
            $table->foreign('pouzivatel_idpouzivatel')->references('idpouzivatel')->on('pouzivatel');
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
        Schema::dropIfExists('sprava');
    }
}
