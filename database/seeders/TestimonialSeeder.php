<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name'=>'Saul Goodman',
            'section_id'=>'9',
            'title'=>'CEO & Founder',
            'image'=>'testimonials/testimonials-1.jpg',
            'testimonial_text'=>'I had the pleasure of working with Ali on a complex project and was constantly impressed by their technical skills and problem-solving abilities. They consistently delivered high-quality code, always hit their deadlines, and went above and beyond to ensure the success of the project. I would highly recommend them to any team looking for a top-notch software engineer'
        ]);
        Testimonial::create([
            'name'=>'Sara ',
            'section_id'=>'9',
            'title'=>'Designer',
            'image'=>'testimonials/testimonials-2.jpg',
            'testimonial_text'=>'In my time working with Ali Haroon, I have been blown away by their passion for software development and their unwavering commitment to producing high-quality work. Their attention to detail and ability to troubleshoot complex problems quickly and efficiently make them a valuable asset to any development team.'
        ]);
        Testimonial::create([
            'name'=>'Jena Karlis',
            'section_id'=>'9',
            'title'=>'Store Owner',
            'image'=>'testimonials/testimonials-3.jpg',
            'testimonial_text'=>'I have never worked with a more dedicated and hardworking software engineer than this guy(Ali). he has a deep understanding of programming languages and software development best practices, and are always willing to lend a hand and share their expertise with others'
        ]);
        Testimonial::create([
            'name'=>'Matt Brandon',
            'section_id'=>'9',
            'title'=>'Freelancer',
            'image'=>'testimonials/testimonials-4.jpg',
            'testimonial_text'=>'"I was impressed by M.ALi Haroon ability to quickly understand complex requirements and turn them into high-quality code. Their attention to detail and commitment to delivering outstanding results made them a valuable asset to our team. I would highly recommend Ali to any organization looking for a talented and reliable software engineer.'
        ]);
        Testimonial::create([
            'name'=>'John Larson',
            'section_id'=>'9',
            'title'=>'Entrepreneur',
            'image'=>'testimonials/testimonials-5.jpg',
            'testimonial_text'=>'I was fortunate enough to work with Ali Haroon on several projects, and I was consistently impressed by their technical skills and ability to find creative solutions to challenging problems. Their passion for software development and commitment to delivering high-quality code make them an asset to any team.'
        ]);
    }
}
