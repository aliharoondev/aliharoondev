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
            'title'=>'Bachelor of Computer Science',
            'section_id'=>'6',
            'degree'=>'BS Hons Computer Science',
            'batch'=>'2012 - 2016',
            'institute'=>'G.C. University, Faisalabad',
            'detail'=>'Outstanding and motivated university graduate with a strong academic record and a passion for learning. Proven ability to excel in a challenging academic environment, with a broad range of coursework in Computer Science',
        ]);
    }
}
