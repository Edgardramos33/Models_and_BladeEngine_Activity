<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition()
    {
        return [
            'isbn' => $this->faker->unique()->isbn13(),
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date_published' => $this->faker->date(),
        ];
    }
}
