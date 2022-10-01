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
            'title'=>'Ceo &amp; Founder',
            'image'=>'testimonials/testimonials-1.jpg',
            'testimonial_text'=>'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
        ]);
        Testimonial::create([
            'name'=>'Sara ',
            'section_id'=>'9',
            'title'=>'Designer',
            'image'=>'testimonials/testimonials-2.jpg',
            'testimonial_text'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'
        ]);
        Testimonial::create([
            'name'=>'Jena Karlis',
            'section_id'=>'9',
            'title'=>'Store Owner',
            'image'=>'testimonials/testimonials-3.jpg',
            'testimonial_text'=>'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.'
        ]);
        Testimonial::create([
            'name'=>'Matt Brandon',
            'section_id'=>'9',
            'title'=>'Freelancer',
            'image'=>'testimonials/testimonials-4.jpg',
            'testimonial_text'=>'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.'
        ]);
        Testimonial::create([
            'name'=>'John Larson',
            'section_id'=>'9',
            'title'=>'Entrepreneur',
            'image'=>'testimonials/testimonials-5.jpg',
            'testimonial_text'=>'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.'
        ]);
    }
}
