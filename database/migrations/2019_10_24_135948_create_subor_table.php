<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuborTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subor', function (Blueprint $table) {
            $table->increments('idsubor');
            $table->string('adresa');
            $table->string('nazov_suboru');
            $table->integer('sprava_idsprava')->unsigned();
            $table->integer('typSuboru_idtypSuboru')->unsigned();
            $table->foreign('sprava_idsprava')->references('idsprava')->on('sprava');
            $table->foreign('typSuboru_idtypSuboru')->references('idtypSuboru')->on('typ_suboru');
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
        Schema::dropIfExists('subor');
    }
}
