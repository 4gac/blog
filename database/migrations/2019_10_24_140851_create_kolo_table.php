<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rocnik');
            $table->string('semester');
            $table->date('zaciatok_kola');
            $table->date('koniec_kola');
            $table->integer('vyzva_idvyzva')->unsigned();
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
        Schema::dropIfExists('kolo');
    }
}
