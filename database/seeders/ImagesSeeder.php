<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $image =new \App\Models\Images;
        $image->URL_Image='videos\VID-20210618-WA0003.mp4';
        $image->Description='Ecole SAQINA';
        $image->save();
    }
}
