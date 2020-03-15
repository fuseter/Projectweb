<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\support\Facades\Hash;


class CreateGameControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_controls', function (Blueprint $table) {
            $table->string('tid');
            $table->string('Team_name');
            $table->string('Tournament_Name');
            $table->string('Tournament_Details');
            $table->date('Tournament_Date');
            $table->string('Game_name');
            $table->string('Game_rules');
            $table->string('Game_format');
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
        Schema::dropIfExists('game_controls');
    }
}
