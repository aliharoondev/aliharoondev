<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'=>'Software Development',
            'section_id'=>'8',
            'icon'=>'bi-microsoft',
            'detail'=>'Having been into the business since 2011, we hold unmatchable expertise in software development. Delivery of more than 1,00 software projects have enabled us to work on variety of architectures, technologies, databases and scales. ',
        ]);
        Service::create([
            'title'=>'Mobile Development',
            'section_id'=>'8',
            'icon'=>'bi-android2',
            'detail'=>'One of the pioneers into mobile development. We provide 360 solutions around mobile – ranging from mobile strategy to mobile marketing. We do more than just develop your product, we help you refine your idea and execute it successfully.',
        ]);
        Service::create([
            'title'=>'Business Analysis',
            'section_id'=>'8',
            'icon'=>'bi-journal',
            'detail'=>'Business Analysis is systematic approach to automate your systems and helps you in your most important I.T. Projects. It is ideal in a market like Pakistan where decision makers are not I.T. literate.',
        ]);
        Service::create([
            'title'=>'Network Consultancy',
            'section_id'=>'8',
            'icon'=>'bi-hdd-network',
            'detail'=>'Solid network is basic need to run a solid base. Owing to most of our experience of the U.S. market, we got a chance to work on complicated systems and solved complex problems.',
        ]);
        Service::create([
            'title'=>'Digital Marketing',
            'section_id'=>'8',
            'icon'=>'bi-hdd-laptop',
            'detail'=>'We provide professional digital marketing services to give you the best digital exposure you deserve. We strongly believe that going digital is the way forward, for any business now, and we try to reflect our beliefs through dedication in our services.',
        ]);
        Service::create([
            'title'=>'Content Marketing',
            'section_id'=>'8',
            'icon'=>'bi-hdd-chat-left-text',
            'detail'=>'We tailor a bespoke content marketing strategy for each of our clients. Our experienced copywriters know exactly how to make words sell',
        ]);
    }
}
