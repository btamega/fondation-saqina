<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article= new Article;
        $article->Titre='Se consacrer aux choses utiles';
        $article->Category='INFORMATIONS';
        $article->Description='Selon Abou Horeira , l`Envoyé d\'Allah a dit:
        « Parmi les qualités d\'un bon Islam, il y a le fait pour l\'homme de ne pas s\'occuper de ce qui ne le regarde pas ».';
        $article->Image='images\portfolio\full\item3.jpg';
        $article->Date_Publication='13/09/2021';
        $article->Type='article';
        $article->save();

    }
}
