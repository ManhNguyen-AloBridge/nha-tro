<?php

namespace Database\Seeders;

use App\Models\AdminMotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminMotel::factory()->count(1)->create();
    }
}
