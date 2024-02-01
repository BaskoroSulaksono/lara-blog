<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(10)->create();

        Category::create([
            'slug' => 'web-programming',
            'name' => 'Web Programming'
        ]);

        Category::create([
            'slug' => 'web-design',
            'name' => 'Web Design'
        ]);

    }
}
