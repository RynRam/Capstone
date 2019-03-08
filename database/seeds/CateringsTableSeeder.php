<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CateringsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caterings')->insert([
            'id' => 1,
            'name' => 'Adult Birthday',
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 2,
            'name' => 'Corporate Event',
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 3,
            'name' => 'Company Anniversary',   
            'event_categories_id' => 1,     
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 4,
            'name' => '18th Birthday',
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 5,
            'name' => '21st Birthday',
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 6,
            'name' => 'Wedding Reception',        
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 7,
            'name' => 'Wedding Anniversary',
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 8,
            'name' => 'Christmas Party',
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 9,
            'name' => 'School Party', 
            'event_categories_id' => 1,       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 10,
            'name' => 'Special Days',    
            'event_categories_id' => 1,    
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
    );
        
    }
}
