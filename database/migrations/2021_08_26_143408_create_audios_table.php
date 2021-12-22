<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audios', function (Blueprint $table) {
            $table->bigIncrements('id_audio');
            $table->timestamps();
            $table->string('Fichier');
            $table->foreignId('id_recitateur')->references('id_recitateur')->on('recitateurs');
            $table->foreignId('id_sourate')->references('id_sourate')->on('sourates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audios');
    }
}
