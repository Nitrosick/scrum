<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_list', function (Blueprint $table) {
            $table->id();

			$table->foreignId('user_id')
				->constrained('users')
				->onDelete('cascade');

            $table->integer('movie_id')->unsigned();
            $table->string('title', 255);
            $table->string('image_link', 255);
            $table->integer('priority')->unsigned()->default(1);
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
        Schema::dropIfExists('movies_list');
    }
}
