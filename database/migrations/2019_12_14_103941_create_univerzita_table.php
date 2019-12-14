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
            $table->increments('id');
			$table->string('nazov');
			$table->string('zmluva_od');
			$table->string('zmluva_do');
			$table->integer('mesto_id')->unsigned()->index();
            $table->foreign('mesto_id')->references('id')->on('mesto');
			$table->string('kontaktna_osoba');
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
