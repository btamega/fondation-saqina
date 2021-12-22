<?php

namespace Database\Seeders;

use App\Models\Volumes;
use Illuminate\Database\Seeder;

class VolumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $volume=new Volumes;
        $volume->Titre='Autres Invocations';
        $volume->save();
    }
}
