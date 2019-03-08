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
            'id' => 1,
            'name' => 'Admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'admin',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 2,
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
            'id' => 3,
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
            'id' => 4,
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
            'id' => 5,
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
            'id' => 6,
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
            'id' => 7,
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
            'id' => 8,
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
            'id' => 9,
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
            'id' => 10,
            'name' => 'Lance',
            'email' =>'lance@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => 'reservation',
            'is_active' => 1,         
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]


    );
    }
}
