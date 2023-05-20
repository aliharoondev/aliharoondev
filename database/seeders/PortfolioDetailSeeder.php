<?php

namespace Database\Seeders;

use App\Models\PortfolioDetail;
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
        PortfolioDetail::create([
            'title'=>'App',
            'category'=>'App',
            'client'=>'Us',
            'portfolio_id'=>'1',
            'project_date'=>'01-02-2020',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/web.jpg',
            'image2'=>'portfolio_detail/web.jpg',
        ]);
        PortfolioDetail::create([
            'title'=>'Ios',
            'category'=>'ios',
            'client'=>'Us',
            'portfolio_id'=>'2',
            'project_date'=>'01-08-2020',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/VandA.jpg',
            'image2'=>'portfolio_detail/VandA.jpg',
        ]);
        PortfolioDetail::create([
            'title'=>'Web',
            'category'=>'Web',
            'client'=>'Us',
            'portfolio_id'=>'3',
            'project_date'=>'01-02-2021',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/triptax.jpg',
            'image2'=>'portfolio_detail/triptax.jpg',
        ]);
        PortfolioDetail::create([
            'title'=>'Web',
            'category'=>'Web',
            'client'=>'Us',
            'portfolio_id'=>'4',
            'project_date'=>'01-02-2021',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/triptax.jpg',
            'image2'=>'portfolio_detail/triptax.jpg',
        ]);
        PortfolioDetail::create([
            'title'=>'Web',
            'category'=>'Web',
            'client'=>'Us',
            'portfolio_id'=>'5',
            'project_date'=>'01-02-2021',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/triptax.jpg',
            'image2'=>'portfolio_detail/triptax.jpg',
        ]);
        PortfolioDetail::create([
            'title'=>'Web',
            'category'=>'Web',
            'client'=>'Us',
            'portfolio_id'=>'6',
            'project_date'=>'01-02-2021',
            'project_url'=>'https://www.eccountant.co/',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio_detail/triptax.jpg',
            'image2'=>'portfolio_detail/triptax.jpg',
        ]);
    }
}
