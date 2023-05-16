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
            'title'=>'Laravel',
            'section_id'=>'3',
            'percentage'=>'90',
        ]);
        Skill::create([
            'title'=>'Javascript',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'PHP/C#',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'ReactJS/VueJS',
            'section_id'=>'3',
            'percentage'=>'70',
        ]);
        Skill::create([
            'title'=>'MySQL/Postgres/MongoDB',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'NodeJs',
            'section_id'=>'3',
            'percentage'=>'80',
        ]);
        Skill::create([
            'title'=>'LInux/AWS',
            'section_id'=>'3',
            'percentage'=>'70',
        ]);
        Skill::create([
            'title'=>'Git/Github/Bitbucket',
            'section_id'=>'3',
            'percentage'=>'70',
        ]);
    }
}
