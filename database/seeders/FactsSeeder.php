<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fact;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fact::create([
            'title'=>'Happy Clients',
            'section_id'=>'2',
            'detail'=>'consequuntur quae',
            'icon'=>'bi-emoji-smile',
            'number'=>'223'
        ]);
        Fact::create([
            'title'=>'Projects ',
            'section_id'=>'2',
            'detail'=>'adipisci atque cum quia aut',
            'icon'=>'bi-journal-richtext',
            'number'=>'521'
        ]);
        Fact::create([
            'title'=>'Hours Of Support',
            'section_id'=>'2',
            'detail'=>'aut commodi quaerat',
            'icon'=>'bi-headset',
            'number'=>'1453'
        ]);
        Fact::create([
            'title'=>'Hard Workers',
            'section_id'=>'2',
            'detail'=>'rerum asperiores dolor',
            'icon'=>'bi-people',
            'number'=>'35'
        ]);
    }
}
