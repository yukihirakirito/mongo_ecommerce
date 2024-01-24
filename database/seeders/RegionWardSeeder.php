<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Kjmtrue\VietnamZone\Models\Ward;
use Illuminate\Support\Facades\DB;

class RegionWardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     *
     * @return void
     */
    public function run()
    {
        // Get Data
        $villages = Ward::get();
        
        // Insert Data to Database
        DB::table('wards')->insert($villages);
    }
}
