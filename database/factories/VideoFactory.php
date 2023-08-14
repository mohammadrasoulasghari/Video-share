<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'url'=>'https://www.aparat.com/v/oT7Zv',
            'length'=>$this->faker->randomNumber(3),
            'slug'=>$this->faker->slug(),
            'description'=>$this->faker->realText(),
            'thumnail'=>'https://loremflickr.com/446/240/world?random='.rand(1,99),
        'category_id'=>  Category::first() ?? Category::factory()
        ];
    }
}
