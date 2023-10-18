<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::create([
            'address'=>'Islamabad, 54000',
            'section_id'=>'10',
            'email'=>'me@aliharoon.dev',
            'phone'=>'+92 300-2735125',
            'location'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.929874649447!2d74.25408171539222!3d31.471115156721076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919030f21be1f9f%3A0x75f0245de10451c7!2sSadiq%20Center!5e0!3m2!1sen!2s!4v1664203914684!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
