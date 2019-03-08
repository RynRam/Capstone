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
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 2,
            'category' => 'Utensils',
            'description' =>'Only Utensils',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 3,
            'category' => 'Electronics',
            'description' =>'Only Electronics',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 4,
            'category' => 'Decorations',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 5,
            'category' => 'Serving',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 6,
            'category' => 'Others',
            'description' =>'Extras',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
