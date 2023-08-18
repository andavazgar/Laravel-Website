<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
        $categories = Category::factory(10)->create();
        $lastIndex = count($categories) - 1;

        $johnDoe = User::factory()->create([
            'username' => 'johnDoe',
            'name' => 'John Doe',
            'avatar' => '/images/avatar-1.png'
        ]);

        $genders = ['1' => 'male', '2' => 'female'];

        for ($i = 0; $i < 15; $i++) {
            if ($i % 3 !== 0) {
                $randomNum = rand(1, 2);
                $gender = $genders[$randomNum];

                $user = User::factory()->create([
                    'name' => fake()->name($gender),
                    'avatar' => "/images/avatar-{$randomNum}.png"
                ]);

                Post::factory()->create([
                    'user_id' => $user,
                    'category_id' => $categories[rand(0, $lastIndex)]
                ]);
            } else {
                Post::factory()->create([
                    'user_id' => $johnDoe,
                    'category_id' => $categories[rand(0, $lastIndex)]
                ]);
            }
        }
    }
}
