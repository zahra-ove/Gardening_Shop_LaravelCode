<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(100),
            'additional_info' => $this->faker->text(500),
            'sku' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'price' => $this->faker->numberBetween(50,1000),
            'category_id' => $this->faker->numberBetween(1,3),
            'created_at' => $this->faker->dateTimeBetween("-555 day" , now()),
            'updated_at' => $this->faker->dateTimeBetween("-555 day" , now())
        ];
    }
}
