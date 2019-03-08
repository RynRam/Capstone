<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'id' => 1,
            'firstname' => 'Ryan',
            'lastname' => 'Ramiso',
            'roles' => 'Bartender',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
        [
            'id' => 2,
            'firstname' => 'Karl Vincent',
            'lastname' => 'Escamilla',
            'roles' => 'Head Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
        [
            'id' => 3,
            'firstname' => 'Jamin',
            'lastname' => 'Erolin',
            'roles' => 'Bartender',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 4,
            'firstname' => 'Lancel',
            'lastname' => 'Aurora',
            'roles' => 'Head Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 5,
            'firstname' => 'Pierce John',
            'lastname' => 'Stevens',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 6,
            'firstname' => 'Chastelaine',
            'lastname' => 'Salazar',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 7,
            'firstname' => 'Joseph',
            'lastname' => 'Manuel',
            'roles' => 'Host',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 8,
            'firstname' => 'Mark',
            'lastname' => 'Abdon',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 9,
            'firstname' => 'John Jericho',
            'lastname' => 'Medrana',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 10,
            'firstname' => 'Jonas',
            'lastname' => 'Revilla',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 11,
            'firstname' => 'Norwin',
            'lastname' => 'Bayhon',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 12,
            'firstname' => 'Jerome',
            'lastname' => 'Bahia',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 13,
            'firstname' => 'Ariell',
            'lastname' => 'Olegario',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 14,
            'firstname' => 'Dennis',
            'lastname' => 'Ruiz',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		[
            'id' => 15,
            'firstname' => 'Ford',
            'lastname' => 'Historia',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 16,
            'firstname' => 'Daniel',
            'lastname' => 'Tuzon',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 17,
            'firstname' => 'James',
            'lastname' => 'Agrimano',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 18,
            'firstname' => 'Daryll',
            'lastname' => 'Castromero',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 19,
            'firstname' => 'Maria',
            'lastname' => 'Ascuncion',
            'roles' => 'Host',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 20,
            'firstname' => 'Maricel',
            'lastname' => 'Tejano',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 21,
            'firstname' => 'Ella',
            'lastname' => 'Noynay',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 22,
            'firstname' => 'Ian',
            'lastname' => 'Marasigan',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 23,
            'firstname' => 'Chen',
            'lastname' => 'Nepumuceno',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 24,
            'firstname' => 'Mara',
            'lastname' => 'Rodriguez',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 25,
            'firstname' => 'Ian',
            'lastname' => 'Alcoriza',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 26,
            'firstname' => 'Joshua',
            'lastname' => 'Caldito',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 27,
            'firstname' => 'Christine',
            'lastname' => 'Espinosa',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 28,
            'firstname' => 'Hazel',
            'lastname' => 'Santiago',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 29,
            'firstname' => 'Timothy',
            'lastname' => 'Galura',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 30,
            'firstname' => 'Jett',
            'lastname' => 'Andrei',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 31,
            'firstname' => 'Leonardo',
            'lastname' => 'Talens',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 32,
            'firstname' => 'Kenneth',
            'lastname' => 'Villarin',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 33,
            'firstname' => 'Willkins',
            'lastname' => 'Costa',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 34,
            'firstname' => 'Calvin',
            'lastname' => 'Sales',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 35,
            'firstname' => 'Emman',
            'lastname' => 'Ramos',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 36,
            'firstname' => 'Rossette',
            'lastname' => 'King',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 37,
            'firstname' => 'Mariel',
            'lastname' => 'Magracia',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 38,
            'firstname' => 'Joshua',
            'lastname' => 'Alejo',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 39,
            'firstname' => 'Julius',
            'lastname' => 'Israel',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 40,
            'firstname' => 'Jake',
            'lastname' => 'Peralta',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 41,
            'firstname' => 'Amy',
            'lastname' => 'Santiago',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 42,
            'firstname' => 'Gina',
            'lastname' => 'Linetti',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 43,
            'firstname' => 'Rosa',
            'lastname' => 'Diaz',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 44,
            'firstname' => 'Terry',
            'lastname' => 'Jeffords',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 45,
            'firstname' => 'Raymond',
            'lastname' => 'Holt',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 46,
            'firstname' => 'Charles',
            'lastname' => 'Boyle',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 47,
            'firstname' => 'Norm',
            'lastname' => 'Scully',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 48,
            'firstname' => 'Michael',
            'lastname' => 'Hitchcock',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 49,
            'firstname' => 'Doug',
            'lastname' => 'Judy',
            'roles' => 'Bartender',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
		
		[
            'id' => 50,
            'firstname' => 'Kevin',
            'lastname' => 'Cozner',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]
		

    );
    }
}
