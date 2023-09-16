<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TestDataTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TestDataTableSeeder::class,
            ModelBrandTableSeeder::class,
            SellingDataTableSeeder::class,

            TestDataEcommerceTableSeeder::class,

        ]);
    }
}
