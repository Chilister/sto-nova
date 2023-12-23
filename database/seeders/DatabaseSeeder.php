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
        $this->call(BrandsTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(FuelTypesTableSeeder::class);
        $this->call(DriveTypesTableSeeder::class);
        $this->call(GearboxTypesTableSeeder::class);
    }
}
