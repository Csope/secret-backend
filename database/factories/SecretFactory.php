<?php

namespace Database\Factories;

use App\Secret;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecretFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Secret::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'secretText' => $this->faker->text,
            'expiresAt' => Carbon::tomorrow(),
            'remainingViews' => 10,
            'hash' => hash('sha256', $this->faker->unique()->text)
        ];
    }
}