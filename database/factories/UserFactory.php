<?php

namespace Database\Factories;

use App\Enums\EnumGender;
use App\Models\Contract;
use App\Models\IdCard;
use App\Models\Motel;
use App\Models\Room;
use App\Models\School;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'email' => $this->faker->email,
            'password' => $this->faker->password(6, 10),
            'image' => null,
            'room_id' => Room::all()->random()->id,
            'vehicle_id' => Vehicle::all()->random()->id,
            'card_id' => IdCard::all()->random()->id,
            'motel_id' => Motel::all()->random()->id,
            'contract_id' => Contract::all()->random()->id,
            'name' => $this->faker->name(),
            // 'gender' => EnumGender::MALE->value,
            'phone_number' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->date,
            'address' => $this->faker->address(),
            'joined_date' => $this->faker->date(),
            'leaved_date' => $this->faker->date(),
        ];
    }
}
