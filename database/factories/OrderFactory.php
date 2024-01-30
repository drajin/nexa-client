<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'brand_id' => Brand::factory(),
            'order_details' => $this->faker->text(),
            'order_status' => $this->faker->word(),
            'order_date' => $this->faker->date(),
            'estimated_delivery_date' => $this->faker->date(),
        ];
    }
}
