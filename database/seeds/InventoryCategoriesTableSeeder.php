<?php

use Illuminate\Database\Seeder;

class InventoryCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_categories')->insert([
            'id' => 1,
            'category' => 'Furniture',
            'description' =>'Only Furniture',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 2,
            'category' => 'Utensils',
            'description' =>'Only Utensils',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 3,
            'category' => 'Electronics',
            'description' =>'Only Electronics',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 4,
            'category' => 'Decorations',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 5,
            'category' => 'Serving',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 6,
            'category' => 'Others',
            'description' =>'Extras',
            'is_active' => 1,         
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
