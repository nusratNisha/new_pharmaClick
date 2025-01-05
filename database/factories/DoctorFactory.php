<?php

namespace Database\Factories;

use App\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{

    protected $model = Doctor::class;


    public function definition()
    {
        return [
            'name' => 'Dr. ' . $this->faker->name, // Adding "Dr." prefix to the name
            'email' => $this->faker->unique()->safeEmail,
            'number' => $this->faker->numerify('1#######'), // Generates a 10-digit number starting with 1
            'photo' => 'no img',
        ];
    }
}
