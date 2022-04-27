<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion', function (Blueprint $table) {
            $table->index('idP');
            $table->index('idJ');
            $table->foreignId('idP')->references('id')->on('partidas');
            $table->foreignId('idJ')->references('id')->on('players');
            $table->primary(['idP', 'idJ']);
            $table->integer('posicion');
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
        Schema::dropIfExists('participacion');
    }
};
