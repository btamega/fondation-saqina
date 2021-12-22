<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryInvocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category__invocations', function (Blueprint $table) {
            $table->bigIncrements('id_category_invocation');
            $table->timestamps();
            $table->string('Titre');
            $table->foreignId('id_volume')->references('id_volume')->on('volumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category__invocations');
    }
}
