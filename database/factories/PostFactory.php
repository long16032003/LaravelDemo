<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Post::class;
    public function definition()
    {
        return [
            //
            'username' => $this->faker->title,
            'password'=> $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
