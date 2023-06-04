<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title'=>'Full Stack Developer.',
            'section_id'=>'1',
            'short_description'=>'A full stack developer possessing a strong understanding of multiple programming languages, frameworks and technologies, and have the ability to develop and maintain complex systems. ',
            'birth_date'=>'1993-04-22',
            'website_url'=>'http://aliharoon.dev',
            'degree'=>'BS Hons Computer Science',
            'phone'=>' +92 345 4647216',
            'email'=>'me@aliharoon.dev',
            'address'=>'Lahore, PAK',
            'freelance'=>'Available',
            'detail'=>'Love To Work with PHP .Net Framework and mvc based website and like to work with those people who really want quality in their Environment. Only work is not the thing that impress anyone But uniqueness and efficiencies does. Curious and intrested in learning new Technologies.',
            'image'=>'about/aliharoon.jpg',
        ]);
    }
}
