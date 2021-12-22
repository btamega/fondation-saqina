<?php

namespace Database\Seeders;

use App\Models\Category_Prieres;
use Illuminate\Database\Seeder;

class CategoryPrieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category=new Category_Prieres;
        $category->Titre='Réparation de la prière';
        $category->save();
    }
}
