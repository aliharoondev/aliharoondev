<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Uncategorized',
            'slug'=>'uncategorized'
        ]);
        Category::create([
            'name'=>'Technology',
            'slug'=>'technology'
        ]);
        Category::create([
            'name'=>'Entertainment',
            'slug'=>'entertainment'
        ]);
        Category::create([
            'name'=>'Fashion',
            'slug'=>'fashion'
        ]);
        Category::create([
            'name'=>'Lifestyle',
            'slug'=>'lifestyle'
        ]);
        Category::create([
            'name'=>'Travel',
            'slug'=>'travel'
        ]);
        Category::create([
            'name'=>'Vlogs',
            'slug'=>'vlogs'
        ]);
        Category::create([
            'name'=>'Health',
            'slug'=>'health'
        ]);
        Category::create([
            'name'=>'Tutorials',
            'slug'=>'tutorials'
        ]);

    }
}
