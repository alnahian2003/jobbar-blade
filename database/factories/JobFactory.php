<?php

namespace Database\Factories;

use App\Enums\EmploymentType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(60),
            'company_name' => fake()->company(),
            'employment_type' => fake()->randomElement(EmploymentType::cases())->value,
            'role' => fake()->jobTitle(),
            'apply_url' => fake()->url(),
            'company_logo' => fake()->imageUrl(100, 100),
            'description' => fake()->realText(600),
            'salary' => Number::currency(fake()->numberBetween(1000, 5000)) . ' - ' . Number::currency(fake()->numberBetween(1000, 5000)),
        ];
    }
}
