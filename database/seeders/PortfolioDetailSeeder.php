<?php

namespace Database\Seeders;

use App\Models\portfolioDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        portfolioDetail::create([
            'title'=>'App',
            'category'=>'App',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios2.jpg',
            'image2'=>'portfolio/ios2.jpg',
        ]);
        portfolioDetail::create([
            'title'=>'Ios',
            'category'=>'ios',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios2.jpg',
            'image2'=>'portfolio/ios2.jpg',
        ]);
        portfolioDetail::create([
            'title'=>'Web',
            'category'=>'Web',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios2.jpg',
            'image2'=>'portfolio/ios2.jpg',
        ]);
    }
}
