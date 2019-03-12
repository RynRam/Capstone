<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CateringsTableSeeder::class,
            CustomersTableSeeder::class,
            EventCategoriesTableSeeder::class,
            InventoriesTableSeeder::class,
            InventoryCategoriesTableSeeder::class,
            PackagesTableSeeder::class,
            StaffsTableSeeder::class,
            UsersTableSeeder::class,
            VenuesTableSeeder::class,
            WarehousesTableSeeder::class,
        ]);
    }
}
