<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_models', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('titul_pre');
            $table->string('meno_kontaktu');
            $table->string('priezvisko_kontaktu');
            //$table->string('titul_post');
            $table->string('email');
            $table->string('tel_cislo');
            $table->integer('idtypKontaktu')->unsigned();
            //$table->foreign('idtypKontaktu')->references('idtypKontaktu')->on('typ_kontaktu');
            $table->foreign('idtypKontaktu')->references('id')->on('typ_kontaktu');
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
        Schema::dropIfExists('kontakt');
    }
}
