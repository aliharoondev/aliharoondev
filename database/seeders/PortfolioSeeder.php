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
            'title'=>'Web',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'	I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/web.jpg',
        ]);
        Portfolio::create([
            'title'=>'VandA',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'portfolio/VandA.jpg',
        ]);
        Portfolio::create([
            'title'=>'Triptax',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'Lead Developer at Triptax',
            'image'=>'portfolio/triptax.jpg',
        ]);
        Portfolio::create([
            'title'=>'Careem',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'Worked on the Outbound section of the Careem. A service more like Uber. Developed it from scratch to end and used technologies like Laravel as a backend, React on frontend and MySQL as a Database.',
            'image'=>'portfolio/careem.jpg',
        ]);
        Portfolio::create([
            'title'=>'Baritastic',
            'section_id'=>'7',
            'category'=>'app',
            'detail'=>'Lead Developer',
            'image'=>'portfolio/baritastic.jpg',
        ]);
        Portfolio::create([
            'title'=>'CareAsOne',
            'section_id'=>'7',
            'category'=>'web',
            'detail'=>'CareAsOne is the go-to solution for both caretakers and employers in the elderly care industry. We’re the most efficient and easy-to-use platform when it comes to finding caregivers, nurses and more. We remove the headache that comes with the hiring process because we care.',
            'image'=>'portfolio/careasone.jpg',
        ]);
    }
}
