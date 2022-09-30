<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title'=>'App',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/app1.jpg',
        ]);
        Portfolio::create([
            'title'=>'App',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/app2.jpg',
        ]);
        Portfolio::create([
            'title'=>'App',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/app3.jpg',
        ]);
        Portfolio::create([
            'title'=>'App',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/app4.jpg',
        ]);
        Portfolio::create([
            'title'=>'Web',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'I am an aspiring Web Designer and Developer. I have more than 3 years of experience as a Web Designer and Developer.. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/web1.jpg',
        ]);
        Portfolio::create([
            'title'=>'Web',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'I am an aspiring Web Designer and Developer. I have more than 3 years of experience as a Web Designer and Developer.. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/web2.jpg',
        ]);
        Portfolio::create([
            'title'=>'Web',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'I am an aspiring Web Designer and Developer. I have more than 3 years of experience as a Web Designer and Developer.. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/web3.jpg',
        ]);
        Portfolio::create([
            'title'=>'Ios',
            'section_id'=>'7',
            'category'=>'ios',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios1.jpg',
        ]);
        Portfolio::create([
            'title'=>'Ios',
            'section_id'=>'7',
            'category'=>'ios',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios2.jpg',
        ]);
        Portfolio::create([
            'title'=>'Ios',
            'section_id'=>'7',
            'category'=>'ios',
            'detail'=>'I am an aspiring freelance Ios Developer. I have more than 3 years of experience as a Ios I am a professional Ios Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/ios3.jpg',
        ]);
        Portfolio::create([
            'title'=>'Graphic Design',
            'section_id'=>'7',
            'category'=>'graphic design',
            'detail'=>'I am an aspiring Graphic Design. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/graphic1.jpg',
        ]);
        Portfolio::create([
            'title'=>'Graphic Design',
            'section_id'=>'7',
            'category'=>'graphic design',
            'detail'=>'I am an aspiring Graphic Design. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/graphic2.jpg',
        ]);
        Portfolio::create([
            'title'=>'Graphic Design',
            'section_id'=>'7',
            'category'=>'graphic design',
            'detail'=>'I am an aspiring Graphic Design. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/graphic3.jpg',
        ]);
    }
}
