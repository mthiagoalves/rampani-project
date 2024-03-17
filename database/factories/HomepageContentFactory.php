<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HomepageContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'initialPhrase' => $this->faker->sentence(6),
            'julianaPhrase' => $this->faker->sentence(6),
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'whatsapp' => $this->faker->phoneNumber,
            'openingHours' => $this->faker->sentence(6),
            'instagram' => $this->faker->userName,
            'facebook' => $this->faker->userName,
            'tiktok' => $this->faker->userName,
        ];
    }
}
