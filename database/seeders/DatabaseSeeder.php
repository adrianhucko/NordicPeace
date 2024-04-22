<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\PostPhoto;
use App\Models\PostComment;
use App\Models\PostLike;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(150)->create();

        $posts = Post::all();

        foreach ($posts as $post) {
            if (rand(0, 1)) {
                PostPhoto::factory(rand(1, 5))->create([
                    'post_id' => $post->id
                ]);
            }

            PostComment::factory(rand(0, 10))->create([
                'post_id' => $post->id
            ]);

            $users_that_likes_the_post = User::query()->take(rand(0, 10))->get();

            foreach ($users_that_likes_the_post as $user) {
                PostLike::factory()->create([
                    'post_id' => $post->id,
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
