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
            'detail'=>'About Ali Haroon. What I am and what I do.',
            'status'=> 1
        ]);

        Section::create([
            'title'=>'Facts',
            'slug'=>'facts',
            'detail'=>'Interesting fun facts about Ali Haroon',
            'status'=> 1
        ]);

        Section::create([
            'title'=>'Skills',
            'slug'=>'skills',
            'detail'=>'What skills we have got and currently working on including top notch and cutting edge technologies',
            'status'=> 1
        ]);

        Section::create([
            'title'=>'Resume',
            'slug'=>'resume',
            'detail'=>'More expressive detail of above "About" section',
            'status'=> 1
        ]);

        Section::create([
            'title'=>'Education',
            'slug'=>'education',
            'detail'=>'Detail on my educational background',
            'status'=> 1
        ]);

        Section::create([
            'title'=>'Experience',
            'slug'=>'experience',
            'detail'=>'Collaboration with teams and Organization',
            'status'=> 1
        ]);

         Section::create([
            'title'=>'Portfolio',
            'slug'=>'portfolio',
            'detail'=>'A short tour of what I have done.',
            'status'=> 1
        ]);

         Section::create([
            'title'=>'Services',
            'slug'=>'services',
            'detail'=>'List of the services we currently offer',
            'status'=> 1
        ]);

         Section::create([
            'title'=>'Testimonials',
            'slug'=>'testimonials',
            'detail'=>'What others saying',
            'status'=> 1
        ]);

         Section::create([
            'title'=>'Contact',
            'slug'=>'contact',
            'detail'=>"Let's Discuss idea",
            'status'=> 1
        ]);

    }
}
