<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\ComplaintInquiry;
use App\Models\Customer;
use App\Models\Note;

class ComplaintInquiryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ComplaintInquiry::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'brand_id' => Brand::factory(),
            'note_id' => Note::factory(),
            'description' => $this->faker->text(),
            'status' => $this->faker->word(),
            'priority' => $this->faker->word(),
            'creation_timestamp' => $this->faker->dateTime(),
            'resolution_timestamp' => $this->faker->dateTime(),
        ];
    }
}
