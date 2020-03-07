<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedInteger('matches')->default(0);
            $table->unsignedInteger('run')->default(0);
            $table->unsignedInteger('high_scores')->default(0);
            $table->unsignedInteger('fifties')->default(0);
            $table->unsignedInteger('hundreds')->default(0);
            $table->unsignedInteger('age')->nullable();
            $table->timestamps();
            
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_histories');
    }
}
