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
            'title'=>'Senior Software Engineer',
            'section_id'=>'6',
            'start_date'=>'2020-02-10',
            'end_date'=>'2023-12-31',
            'company_name'=>'Sixlogics/Brainx',
            'company_address'=>'27, F Block, Johar Town, Lahore',
            'work_type'=>'remote',
            'job_type'=>'freelance',
            'detail'=>'Lead in the development, and implementation of the logic, layout, and production communication materials ',
        ]);
        Experience::create([
            'title'=>'Senior Software Engineer',
            'section_id'=>'6',
            'start_date'=>'2021-05-17',
            'end_date'=>'2023-06-17',
            'company_name'=>'Abacus Consulting',
            'company_address'=>'Shaheen Complex, 2nd Floor, Lahore, Pakistan.',
            'work_type'=>'onsite',
            'job_type'=>'full time',
            'detail'=>'Served the organization as a PHP Software Engineer and contributed in the mega projects like Careem, PLRA, PSDF.',
        ]);
    }
}
