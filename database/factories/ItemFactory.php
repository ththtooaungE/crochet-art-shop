<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'code' => Str::random(5),
            'price' => 30000,
            'description' => $this->faker->text(),
            'stock' => 10,
            'image' => $this->faker->imageUrl(200, 200, 'fashion'),
            'artist_id' => Artist::factory()
        ];
    }
}
