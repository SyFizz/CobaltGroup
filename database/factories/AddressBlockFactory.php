<?php

namespace Database\Factories;

use App\Models\AddressBlock;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressBlockFactory extends Factory
{
    protected $model = AddressBlock::class;

    public function definition(): array
    {
        return [
            'network' => $this->faker->ipv4,
            'cidr' => $this->faker->numberBetween(1, 32),
            'type' => $this->faker->randomElement(['public', 'private']),
            'comment' => $this->faker->sentence,
        ];
    }
}
