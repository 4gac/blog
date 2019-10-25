<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univerzita', function (Blueprint $table) {
            $table->increments('iduniverzita');
            $table->string('nazov_univerzity');
            $table->string('mesto');
            $table->string('kontaktna_osoba');
            $table->date('zmluva_do');
            $table->date('zmluva_od');
            $table->integer('krajina_idkrajina')->unsigned();
            $table->foreign('krajina_idkrajina')->references('idkrajina')->on('krajina');
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
        Schema::dropIfExists('univerzita');
    }
}
