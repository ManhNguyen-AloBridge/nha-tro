<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_number' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]),
            'floor' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'price' => $this->faker->randomElement([1000, 2000, 3000, 4000, 5000]),
        ];
    }
}
