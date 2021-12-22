<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prieres', function (Blueprint $table) {
            $table->bigIncrements('id_priere');
            $table->timestamps();
            $table->string('Titre');
            $table->string('Description',10000);
            $table->text('Reference_Coran');
            $table->text('Reference_Hadith');
            $table->foreignId('id_category_priere')->references('id_category_priere')->on('category__prieres');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prieres');
    }
}
