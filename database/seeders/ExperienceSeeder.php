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
            'start_date'=>'2020-02-17',
            //'end_date'=>'',
            'company_name'=>'Brainx',
            'company_address'=>'27, Block L Johar Town, Lahore, Punjab 54000',
            'work_type'=>'remote',
            'job_type'=>'freelance',
            'detail'=>'Working with team of resources. Server management, Continuous Integration Management. Communication with Client and offshore developers. Project upgrades / Enhancements / Fixes and Updates. ',
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
