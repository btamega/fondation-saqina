<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnalites', function (Blueprint $table) {
            $table->bigIncrements('id_personnalite');
            $table->timestamps();
            $table->string('Nom');
            $table->text('Biographie', 10000);
            $table->text('Histoire', 10000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnalites');
    }
}
