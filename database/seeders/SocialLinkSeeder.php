<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\SocialLink;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialLink::create([
            'title'=>'twitter',
            'icon'=>'bx bxl-twitter',
            'link'=>'https://twitter.com/AliharoonKhan'
        ]);
        SocialLink::create([
            'title'=>'linkedin',
            'icon'=>'bx bxl-linkedin',
            'link'=>'https://linkedin.com/in/maliharoon/'
        ]);
        // SocialLink::create([
        //     'title'=>'instagram',
        //     'icon'=>'bxl-instagram',
        //     'link'=>'#'
        // ]);
        // SocialLink::create([
        //     'title'=>'skype',
        //     'icon'=>'bxl-skype',
        //     'link'=>'#'
        // ]);
        // SocialLink::create([
        //     'title'=>'linkedine',
        //     'icon'=>'bxl-linkedine',
        //     'link'=>'#'
        // ]);
    }
}
