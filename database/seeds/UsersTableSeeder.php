<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('users')->insert([
        [
            'name' => 'Lynagails',
            'email' =>'lynagails@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'admin',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Inventory',
            'email' =>'inventory@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'inventory',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Jamin',
            'email' =>'jamin@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'inventory',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Ryan',
            'email' =>'ryan@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'inventory',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Karl',
            'email' =>'karl@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'manpower',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Vincent',
            'email' =>'vincent@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'reservation',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Manpower',
            'email' =>'manpower@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'manpower',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Reservation',
            'email' =>'reservation@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'reservation',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Lance',
            'email' =>'lance@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'reservation',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
        ]

    );
    }
}
