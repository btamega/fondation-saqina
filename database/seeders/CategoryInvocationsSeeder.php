<?php

namespace Database\Seeders;

use App\Models\Category_Invocations;
use Illuminate\Database\Seeder;

class CategoryInvocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category=new Category_Invocations;
        $category->Titre='Invocation de demande du Paradis';
        $category->id_volume='2';
        $category->save();
    }
}
