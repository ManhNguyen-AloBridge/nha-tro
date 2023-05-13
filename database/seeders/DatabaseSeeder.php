<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                IdCardSeeder::class,
                RoomPriceSeeder::class,
                RoomSeeder::class,
                CostLivingSeeder::class,
                VehicleSeeder::class,
                ReceiptSeeder::class,
                AdminSeeder::class,
                MotelSeeder::class,
                ContractSeeder::class,
                UserSeeder::class,
            ]
        );
    }
}
