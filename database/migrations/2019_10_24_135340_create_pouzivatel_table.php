<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePouzivatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pouzivatel', function (Blueprint $table) {
            $table->increments('idpouzivatel');
            $table->string('meno');
            $table->string('priezvisko');
            $table->integer('rola_idrola')->unsigned();
            $table->foreign('rola_idrola')->references('idrola')->on('rola');
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
        Schema::dropIfExists('pouzivatel');
    }
}
