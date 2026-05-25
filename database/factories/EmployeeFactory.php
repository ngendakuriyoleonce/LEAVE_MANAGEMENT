<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
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
             'employee_id' => 'EMP' .fake()->unique()->numberBetween(1000,9999),
                'phone' =>fake()->phoneNumber(),
                'nationality' =>fake()->country(),
                'department' =>fake()->randomElement([
                    'HR',
                    'IT',
                    'Finance',
                    'Marketing'
                ]),
                'designation' => fake()->jobTitle(),
                'date_of_joining' =>fake()->date(),
                'user_id' =>2,
        ];
    }
}
