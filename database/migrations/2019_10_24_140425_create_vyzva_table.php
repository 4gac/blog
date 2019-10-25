<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVyzvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyzva', function (Blueprint $table) {
            $table->increments('idvyzva');
            $table->string('nazov_vyzvy');
            $table->integer('typVyzvy_idtypVyzvy')->unsigned();
            $table->integer('id_suboru_hlavna_foto')->unsigned();
            $table->foreign('typVyzvy_idtypVyzvy')->references('id_typ_vyzvy')->on('typ_vyzvy');
            $table->foreign('id_suboru_hlavna_foto')->references('idsubor')->on('subor');
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
        Schema::dropIfExists('vyzva');
    }
}
