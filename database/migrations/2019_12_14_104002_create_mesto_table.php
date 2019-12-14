<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesto', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('countries_id')->unsigned()->index();
            $table->foreign('countries_id')->references('id')->on('countries');

            $table->integer('univerzita_id')->unsigned()->index();
            $table->foreign('univerzita_id')->references('id')->on('univerzita');
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
        Schema::dropIfExists('mesto');
    }
}
