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
            'detail'=>'with great satisfaction',
            'icon'=>'bi-emoji-smile',
            'number'=>'27'
        ]);
        Fact::create([
            'title'=>'Projects ',
            'section_id'=>'2',
            'detail'=>'delivered successfully',
            'icon'=>'bi-journal-richtext',
            'number'=>'52'
        ]);
        Fact::create([
            'title'=>'Hours Of Support',
            'section_id'=>'2',
            'detail'=>'provided to clients',
            'icon'=>'bi-headset',
            'number'=>'1453'
        ]);
        Fact::create([
            'title'=>'Hard Workers',
            'section_id'=>'2',
            'detail'=>'affiliated with me',
            'icon'=>'bi-people',
            'number'=>'3'
        ]);
    }
}
