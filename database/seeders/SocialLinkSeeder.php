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
            'icon'=>'bxl-twitter',
            'link'=>'#'
        ]);
        SocialLink::create([
            'title'=>'facebook',
            'icon'=>'bxl-facebook',
            'link'=>'#'
        ]);
        SocialLink::create([
            'title'=>'instagram',
            'icon'=>'bxl-instagram',
            'link'=>'#'
        ]);
        SocialLink::create([
            'title'=>'skype',
            'icon'=>'bxl-skype',
            'link'=>'#'
        ]);
        // SocialLink::create([
        //     'title'=>'linkedine',
        //     'icon'=>'bxl-linkedine',
        //     'link'=>'#'
        // ]);
    }
}
