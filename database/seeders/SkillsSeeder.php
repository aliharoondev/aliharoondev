<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'title'=>'HTML',
            'section_id'=>'3',
            'percentage'=>'90',
        ]);
        Skill::create([
            'title'=>'PHP',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'CSS',
            'section_id'=>'3',
            'percentage'=>'90',
        ]);
        Skill::create([
            'title'=>'WORDPRESS/CMS',
            'section_id'=>'3',
            'percentage'=>'70',
        ]);
        Skill::create([
            'title'=>'JAVASCRIPT',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'NodeJs',
            'section_id'=>'3',
            'percentage'=>'90',
        ]);
    }
}
