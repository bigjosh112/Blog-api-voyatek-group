<?php

namespace Database\Factories;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Like::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Post::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
