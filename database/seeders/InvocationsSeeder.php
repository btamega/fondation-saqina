<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $invocation =new \App\Models\Invocations;
        $invocation->Category='Invocations du soir';
        $invocation->Titre='Invocation du soir';
        $invocation->Description='« Ô Allah ! Tu es mon Seigneur. Il n’y a aucune divinité [digne d’être adorée] en dehors de Toi. Tu m’as créé et je suis Ton serviteur, je me conforme autant que je peux à mon engagement et à ma promesse vis-à-vis de Toi. Je cherche refuge auprès de Toi contre le mal que j’ai commis. Je reconnais Ton bienfait à mon égard et je reconnais mon péché. Pardonne-moi donc, en effet nul autre que Toi ne pardonnes les péchés. »';
        $invocation->Reference_Coran='اللَّهُمَّ أَنْتَ رَبِّي لاَ إِلَهَ إِلاَّ أَنْتَ، خَلَقْتَنِي وَ أَنَا عَبْدُكَ، وَ أَنَا عَلَى عَهْدِكَ وَ وَعْدِكَ مَا اسْتَطَعْتُ، أَعُوذُ بِكَ مِنْ شَرِّ مَا صَنَعْتُ، أَبُوءُ لَكَ بِنِعْمَتِكَ عَلَيَّ وَ َأَبُوءُ بِذَنْبِي فَاغْفِرْ لِي فَإِنَّهُ لاَ يَغْفِرُ الذُّنُوبَ إِلاَّ أَنْتَ';
        $invocation->Transcription_Phonetique='Allâhumma anta Rabbî, lâ ilâha illâ ant. Khalaqtanî wa ana ‘abduk, wa ana ‘alâ ‘ahdika wa wa’dika mâ stata’t. A’ûdhu bika min sharri mâ sana’t. Abûu laka bi-ni’matika ‘alayya wa abûu bi-dhanbî fa-ghfir lî, fa-innahu lâ yaghfiru-dh-dhunûba illâ ant.';
        $invocation->Reference_Hadith='Sahîh Al-Bukhârî n° 5947.';
        $invocation->id_category_invocation='2';
        $invocation->save();
        
    }
}
