<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Addressable;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'addressable_type' => $this->faker->word(),
            'addressable_id' => Addressable::factory(),
            'street' => $this->faker->streetName(),
            'street_number' => $this->faker->word(),
            'address_supplement' => $this->faker->word(),
            'postcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'post_box' => $this->faker->word(),
        ];
    }
}
