<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Person::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->name,
            'birth_date' => $this->faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'active' => $this->faker->boolean(80),
        ];
    }
}