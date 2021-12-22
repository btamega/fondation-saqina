<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prieres =new \App\Models\Prieres;
        $prieres->Titre='Les conditions de validité de la prière ';
        $prieres->Description='-Qui peut faire la prière ?

        La prière est un devoir pour chaque musulman qui remplit les conditions suivantes :
        
        ➡️ Etre musulman (avoir prononcé la Chahada)
        ➡️ Avoir atteint l’âge de la puberté : Il est recommandé, selon la tradition prophétique, que l\'enfant apprenne la prière dès l\'âge de 7 ans, et la pratique à 10 ans.
        ➡️Etre sain d’esprit : selon un hadith : « N’est pas responsable, le fou jusqu’à ce qu’il reprenne sa raison. »
        
        ▪️Avoir des vêtements purs, propres et sans images dessus
▪️Avoir un sol propre, sans impureté ou souillure
▪️Etre en état de pureté corporelle, (ablution mineure et majeure)
▪️Se couvrir les parties privées du corps, du genoux au nombril pour les hommes au minimum, et pour la femme tout le corps excepté le visage et les mains.
▪️Prier dans les heures prescrites, à l\'exception des malades et voyageurs
▪️S\'orienter vers la Qibla, la direction de la mecque
▪️Avoir l\'intention sincère de prier, car "Les actions ne valent que par leurs intentions"';
        $prieres->Reference_Coran='';
        $prieres->Transcription_Phonetique='';
        $prieres->Reference_Hadith='';
        $prieres->id_category_priere='1';
        $prieres->save();
    }
}
