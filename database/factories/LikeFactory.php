<?php

namespace Database\Factories;

use App\Models\Comments;
use App\Models\User;
use App\Models\Video;
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
    public function definition(): array
    {
        return [
            $likeable=$this->likeable(),
            'user_id'=>User::first() ?? User::factory(),
            'likeable_type' => $likeable,
            'likeable_id' => $likeable::factory(),
            'vote' => $likeable->factory->randomElement([1,-1])
        ];
    }
    private function likeable(){
        return $this->faker->randomElement([
            Video::class,
            Comments::class,

        ]);
    }
}
