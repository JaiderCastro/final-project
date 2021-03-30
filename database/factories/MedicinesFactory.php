<?php

namespace Database\Factories;

use App\Models\Medicines;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicinesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicines::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /* 'code' => $this->faker->numberBetween($min = 0001, $max = 0010),
            'name' =>  $this->faker->text(25),
            'price' => $this->faker->numberBetween($min = 15000, $max = 350000), */
        ];
    }
}
