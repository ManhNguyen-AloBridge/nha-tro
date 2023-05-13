<?php

namespace Database\Factories;

use App\Enums\EnumAdminRole;
use App\Enums\EnumGender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => EnumAdminRole::SUPER_ADMIN->value,
            'name' => 'Admin',
            'email' => 'sonyvaioweb@gmail.com',
            // 'gender' => EnumGender::MALE->value,
            'password' => '$2a$12$uPtlyb/b8MYjhtb3BhxrsufEZOziUyCVYhb3Mv1Q9w85XTgkbVmse', //Aa@123123
            'phone_number' => '123456789',
            'bank_account_number' => '123456789',
            'account_holder' => 'Manh',
            'bank_name' => 'BIDV',
        ];
    }
}
