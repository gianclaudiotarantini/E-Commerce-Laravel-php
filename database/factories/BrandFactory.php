<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand_name = $this->faker->unique()->words($n=2, $asText = true);
        $slug = Str::slug($brand_name);
        return [
            'name' => Str::title($brand_name),
            'slug' =>$slug,
            'image' => $this->faker->numberBetween(1,6).'.jpg'

        ];
    }
}

// Questa factory genera dati fittizi per il modello Brand, 
// impostando un nome, uno slug e un'immagine casuale per ogni record.






