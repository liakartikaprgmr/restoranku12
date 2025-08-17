<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement(
                ['https://plus.unsplash.com/premium_photo-1694547926001-f2151e4a476b', 
                'https://plus.unsplash.com/premium_photo-1668146927669-f2edf6e86f6f', 
                'https://images.unsplash.com/photo-1738681335816-8e0df0aa9824']
            ),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
