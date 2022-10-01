<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'title'=>'UI/UX Designer & Web Developer.',
            'section_id'=>'6',
            'start_date'=>'2021-05-17',
            'end_date'=>'2023-05-17',
            'company_name'=>'Exprsol',
            'company_address'=>'G-38 ground floor Suidiq trade center, Gulberg 2, Lahore, 54000',
            'work_type'=>'remote',
            'job_type'=>'freelance',
            'detail'=>'I am an aspiring freelance UI Designer and Developer. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
        ]);
        Experience::create([
            'title'=>'GRAPHIC DESIGN SPECIALIST',
            'section_id'=>'6',
            'start_date'=>'2020-02-17',
            'end_date'=>'2023-06-17',
            'company_name'=>'Exprsol',
            'company_address'=>'G-38 ground floor Suidiq trade center, Gulberg 2, Lahore, 54000',
            'work_type'=>'onsite',
            'job_type'=>'full time',
            'detail'=>'I am an aspiring freelance UI Designer and Developer. I have more than 3 years of experience as a UI Designer also an expert in Graphic Design. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
        ]);
    }
}
