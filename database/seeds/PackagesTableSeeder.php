<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('packages')->insert([[
            'name' => 'Package A',
            'inclusion' =>' (1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and One Dessert',
            'file' => 'packageA.png',
            'price' => 550,
            'is_active' => 1,         
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package B',
            'inclusion' =>' (1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and Two Dessert',
            'file' => 'packageB.png',
            'price' => 600,
            'is_active' => 1,         
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package C',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable and (1)Seafood Pasta',
            'file' => 'packageC.png',
            'price' => 400,
            'is_active' => 1,         
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package A',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and One Dessert',
            'file' => 'packageA.png',
            'price' => 500,
            'is_active' => 1,         
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package B',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and Two Dessert',
            'file' => 'packageB.png',
            'price' => 600,
            'is_active' => 1,         
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package C',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable and (1)Seafood Pasta',
            'file' => 'packageC.png',
            'price' => 40,
            'is_active' => 1,         
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package A',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and One Dessert',
            'file' => 'packageA.png',
            'price' => 650,
            'is_active' => 1,         
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package B',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable, (1)Fish or (1)Seafood Pasta / Appetizer, Soup, Salad and Two Dessert',
            'file' => 'packageB.png',
            'price' => 700,
            'is_active' => 1,         
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Package C',
            'inclusion' =>'(1)Beef, (1)Pork, (1)Chicken, (1)Vegetable and (1)Seafood Pasta',
            'file' => 'packageC.png',
            'price' => 450,
            'is_active' => 1,         
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]]
    );
    }

}