<?php

namespace Database\Factories;

use App\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MedicineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Generates a random word for the medicine name
            'expired_date' => $this->faker->dateTimeBetween('now', '+1 years')->format('Y-m-d'),
            'availability' => $this->faker->numberBetween(1, 200), // Random number between 1 and 200 for availability
        ];
    }
}
