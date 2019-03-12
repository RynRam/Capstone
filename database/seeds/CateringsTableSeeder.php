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
        if(DB::table('caterings')->get()->count() == 0){
        DB::table('caterings')->insert(
        [
            'name' => 'Corporate Event',
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Company Anniversary',   
            'event_categories_id' => 1,     
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => '18th Birthday',
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => '21st Birthday',
            'event_categories_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Wedding Reception',        
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Wedding Anniversary',
            'event_categories_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Christmas Party',
            'event_categories_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'School Party', 
            'event_categories_id' => 1,       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Special Days',    
            'event_categories_id' => 1,    
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
    ); 
    }}
}
