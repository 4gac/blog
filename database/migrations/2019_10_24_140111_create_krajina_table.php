<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrajinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krajina', function (Blueprint $table) {
            $table->increments('idkrajina');
            $table->string('nazov_krajiny');
            $table->longText('informacia_o_krajine');
            $table->integer('kontinent_idkontinent')->unsigned();
            $table->integer('subor_idsubor')->unsigned();
            $table->foreign('kontinent_idkontinent')->references('idkontinent')->on('kontinent');
            $table->foreign('subor_idsubor')->references('idsubor')->on('subor');
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
        Schema::dropIfExists('krajina');
    }
}
