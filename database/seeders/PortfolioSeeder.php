<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title'=>'Eccountant',
            'category'=>'web',
            'detail' => 'Eccountant ERP is the perfect solution for your business, and the best could base EPR in Pakistan. It is your business partner that streamlines your business needs into a breeze.',
            'image'=>'portfolio/web.jpg',
            'section_id'=>'7',
        ]);

        Portfolio::create([
            'title'=>'V&A',
            'category'=>'web',
            'detail'=>'I am an aspiring App Developer. I have more than 3 years of experience as a UI Designer also an expert in App Developer. I am a professional Web Developer too. I am looking to get a better relationship with clients, I personally believe that client satisfaction is more importan',
            'image'=>'global/portfolio/vanda.jpg',
            'section_id'=>'7',
        ]);

        Portfolio::create([
            'title'=>'Triptax',
            'category'=>'app',
            'detail'=>'TripTax, tourist tax refund in 100 seconds with Great Refund Rate, Secure & Private and Fast & Automated Processing',
            'image'=>'global/portfolio/triptax.jpg',
            'section_id'=>'7',
        ]);

        Portfolio::create([
            'title'=>'Careem',
            'category'=>'web',
            'detail'=>' Careem, the everything app for your everyday needs. Rides, food, groceries, payments and more. Unlock unlimited savings and exclusive benefits with Careem Plus.',
            'image'=>'global/portfolio/careem.jpeg',
            'section_id'=>'7',
        ]);

        Portfolio::create([
            'title'=>'Baritastic',
            'category'=>'app',
            'detail'=>'Baritastic is a software platform for clinics and hospitals to manage their patients, improve engagement, drive compliance, and get patients to surgery quicker. Patients track their nutrition, log their exercise exercise, setup reminders, review educational content, access their calendar and more on the mobile app',
            'image'=>'global/portfolio/baritastic.jpg',
            'section_id'=>'7',
        ]);

        Portfolio::create([
            'title'=>'CareAsOne',
            'category'=>'web',
            'detail'=>'CareAsOne is the go-to solution for both caretakers and employers in the elderly care industry. We’re the most efficient and easy-to-use platform when it comes to finding caregivers, nurses and more. We remove the headache that comes with the hiring process because we care.',
            'image'=>'global/portfolio/careasone.jpg',
            'section_id'=>'7',
        ]);
    }
}
