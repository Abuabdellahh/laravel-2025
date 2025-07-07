<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */

// This is the factory for the Employee model.
// It is used to generate fake data for testing and seeding.
// The factory provides values for the following fields:
// - name
// - email
// - phone
// - address
// - city
// - state
// - zip
// - country


// Difference between Factory and Seeder:
//
// * A Factory is used to define how to generate fake data for a model. It is mainly used for testing and for seeding large amounts of random data.
// * A Seeder is used to insert data into the database, often with specific or static values. Seeders can use factories to generate data, but can also insert predefined records.
//
// In summary: 
// * Factories generate fake data
// * Seeders insert data (which can be fake or real) into the database.

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            
        ];
    }
}
