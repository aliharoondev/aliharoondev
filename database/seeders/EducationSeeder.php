<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'title'=>'UI/UX Designer & Web Developer.',
            'section_id'=>'6',
            'degree'=>'Software Engineer',
            'session'=>'2016-2020',
            'institute'=>'Univerty Of Lahore',
            'detail'=>'I am an aspiring freelance UI Designer and Developer. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
        ]);
        Education::create([
            'title'=>'Graphic Design.',
            'section_id'=>'6',
            'degree'=>'Software Engineer',
            'session'=>'2012-2016',
            'institute'=>'Government Collage Univerty ',
            'detail'=>'I am an aspiring freelance UI Designer and Developer. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
        ]);
    }
}
