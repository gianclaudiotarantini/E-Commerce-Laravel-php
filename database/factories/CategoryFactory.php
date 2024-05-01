<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category_name = $this->faker->unique()->words($n=2, $asText = true);
        $slug = Str::slug($category_name);
        return [
            'name' => Str::title($category_name),
            'slug' =>$slug,
            'image' => $this->faker->numberBetween(1,6).'.jpg'

        ];
    }
}

// Questa factory genera dati fittizi per le categorie, 
// impostando un nome, uno slug e un'immagine casuale per ogni record.

