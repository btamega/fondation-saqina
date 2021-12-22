<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invocations', function (Blueprint $table) {
            $table->bigIncrements('id_invocation');
            $table->timestamps();
            $table->string('Category');
            $table->string('Titre');
            $table->string('Description',10000);
            $table->string('Reference_Coran');
            $table->string('Reference_Hadith');
            $table->foreignId('id_category_invocation')->references('id_category_invocation')->on('category__invocations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invocations');
    }
}
