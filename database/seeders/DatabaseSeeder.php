<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        //    UserTableSeeder::class,
        //    RoleTableSeeder::class,
           SectionSeeder::class,
           AboutSeeder::class,
           FactsSeeder::class,
           SkillsSeeder::class,
           ExperienceSeeder::class,
           EducationSeeder::class,
           ContactSeeder::class,
           ServiceSeeder::class,
           TestimonialSeeder::class,
           PortfolioSeeder::class,
           SocialLinkSeeder::class,
        ]);
    }
}
