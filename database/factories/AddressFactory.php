<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Address>
 */
class AddressFactory extends Factory
{

    protected $model = Address::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_block_id' => AddressBlockFactory::new(),
            'address' => $this->faker->ipv4,
            'cidr' => $this->faker->numberBetween(1, 32),
            'comment' => $this->faker->sentence,

        ];
    }
}
