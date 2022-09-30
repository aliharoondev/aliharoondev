<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'title'=>'About',
            'detail'=>'This Section About',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Facts',
            'detail'=>'This Section about Facts',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Skills',
            'detail'=>'This Section about Skills',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Resume',
            'detail'=>'This Section about Resume',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Education',
            'detail'=>'This Section about Education',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Experience',
            'detail'=>'This Section about Experience',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Portfolio',
            'detail'=>'This Section about Portfolio',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Services',
            'detail'=>'This Section about Services',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Testimonials',
            'detail'=>'This Section about Testimonials',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Contact',
            'detail'=>'This Section about Contact',
            'status'=>'active'
        ]);

    }
}
