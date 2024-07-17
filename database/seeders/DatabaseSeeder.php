<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create a user
        $user = User::factory()->create();

        // Create some blogs with posts
        Blog::factory(5)->create()->each(function ($blog) {
            // Create some posts for each blog
            \App\Models\Post::factory(5)->create(['blog_id' => $blog->id]);
        });
    }
}
