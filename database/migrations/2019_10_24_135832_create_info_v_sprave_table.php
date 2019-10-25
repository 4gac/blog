<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoVSpraveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_v_sprave', function (Blueprint $table) {
            $table->increments('idInfoVsprave');
            $table->integer('infoSpravy_idinfoSpravy')->unsigned();
            $table->integer('sprava_idsprava')->unsigned();
            $table->foreign('infoSpravy_idinfoSpravy')->references('idinfoSpravy')->on('info_spravy');
            $table->foreign('sprava_idsprava')->references('idsprava')->on('sprava');
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
        Schema::dropIfExists('info_v_sprave');
    }
}
