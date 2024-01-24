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
        $this->call(RegionProvinceSeeder::class);
        $this->call(RegionDistrictSeeder::class);
        $this->call(RegionWardSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
