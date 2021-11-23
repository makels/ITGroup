<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films_genres', function (Blueprint $table) {
            $table->bigInteger("film_id")->unsigned();
            $table->bigInteger("genre_id")->unsigned();

            $table->foreign("film_id")
                ->on("films")
                ->references("id")
                ->onDelete("cascade");

            $table->foreign("genre_id")
                ->on("genres")
                ->references("id")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films_genres');
    }
}
