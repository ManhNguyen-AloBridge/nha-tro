<?php

namespace Database\Seeders;

use App\Models\Motel;
use Illuminate\Database\Seeder;

class MotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motel::factory()->count(1)->create();
    }
}
