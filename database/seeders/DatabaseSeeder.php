<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostLike;
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
        $posts = Post::factory()->count(20)->create();

        for ($i = 1; $i < 150; $i++) {
            PostLike::factory()->create([
                'post_id' => $posts->random()->id
            ]);
        }
    }
}
