<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProphètesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prophètes', function (Blueprint $table) {
            $table->bigIncrements('id_prophete');
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
        Schema::dropIfExists('prophètes');
    }
}
