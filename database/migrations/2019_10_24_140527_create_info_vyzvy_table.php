<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoVyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_vyzvy', function (Blueprint $table) {
            $table->increments('infoVyzvy');
            $table->integer('vyzva_idvyzva')->unsigned();
            $table->integer('vyzvaInfo_idvyzvaInfo')->unsigned();
            $table->foreign('vyzva_idvyzva')->references('idvyzva')->on('vyzva');
            $table->foreign('vyzvaInfo_idvyzvaInfo')->references('idvyzvaInfo')->on('vyzva_info');
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
        Schema::dropIfExists('info_vyzvy');
    }
}
