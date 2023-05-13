<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Motel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminMotel>
 */
class AdminMotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $admin = Admin::all()->random();
        $motel = Motel::all()->random();

        return [
            'motel_id' => $motel->id,
            'admin_id' => $admin->id,
        ];
    }
}
