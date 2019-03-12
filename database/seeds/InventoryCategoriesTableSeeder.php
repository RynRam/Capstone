<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        [
            'category' => 'Utensils',
            'description' =>'Only Utensils',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'category' => 'Electronics',
            'description' =>'Only Electronics',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'category' => 'Decorations',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'category' => 'Serving',
            'description' =>'Only for Decorations',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'category' => 'Others',
            'description' =>'Extras',
            'is_active' => 1,         
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]]);
        }
    }

