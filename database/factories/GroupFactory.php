<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Group::class;

    /**
     * @return array
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'course' => random_int(1, 5),
            'faculty' => $this->faker->name,
            'archive' => $this->faker->boolean(20),
        ];
    }
}