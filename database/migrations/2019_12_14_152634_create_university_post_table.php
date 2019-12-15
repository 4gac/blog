<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_post', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('university_id')->unsigned()->index();
            $table->foreign('university_id')->references('id')->on('univerzita');
			$table->integer('post_id')->unsigned()->index();
            $table->foreign('post_id')->references('id')->on('univerzita');
			$table->string('pocet_miest');
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
        Schema::dropIfExists('university_post');
    }
}
