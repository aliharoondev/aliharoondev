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
            'slug'=>'about',
            'detail'=>'This Section About',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Facts',
            'slug'=>'facts',
            'detail'=>'This Section about Facts',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Skills',
            'slug'=>'skills',
            'detail'=>'This Section about Skills',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Resume',
            'slug'=>'resume',
            'detail'=>'This Section about Resume',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Education',
            'slug'=>'education',
            'detail'=>'This Section about Education',
            'status'=>'active'
        ]);
        Section::create([
            'title'=>'Experience',
            'slug'=>'experience',
            'detail'=>'This Section about Experience',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Portfolio',
            'slug'=>'portfolio',
            'detail'=>'This Section about Portfolio',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Services',
            'slug'=>'services',
            'detail'=>'This Section about Services',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Testimonials',
            'slug'=>'testimonials',
            'detail'=>'This Section about Testimonials',
            'status'=>'active'
        ]);
         Section::create([
            'title'=>'Contact',
            'slug'=>'contact',
            'detail'=>'This Section about Contact',
            'status'=>'active'
        ]);

    }
}
