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
            'title'=>'UI/UX Designer & Web Developer.',
            'section_id'=>'1',
            'short_description'=>'Hi there, Are you looking for a unique, minimal, professional & modern landing page designer',
            'birth_date'=>'1991-01-01 00:00:00',
            'website_url'=>'http://www.exprsol.com',
            'degree'=>'BS Hons',
            'phone'=>'+92 123456789',
            'email'=>'exapmle@gmail.com',
            'address'=>'G-38 ground floor Suidiq trade center, Gulberg 2, Lahore, 54000',
            'freelance'=>'Available',
            'detail'=>'I am an aspiring freelance UI Designer and Developer. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'about/K7FgjQcieJhbxA9ydyTSTQ71YjVKmSHsdEK40FAx.jpg',
        ]);
    }
}
