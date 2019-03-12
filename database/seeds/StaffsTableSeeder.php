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
        if(DB::table('staffs')->get()->count() == 0){
        DB::table('staffs')->insert([
        [
            'firstname' => 'Karl Vincent',
            'lastname' => 'Escamilla',
            'roles' => 'Head Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
        [
            'firstname' => 'Jamin',
            'lastname' => 'Erolin',
            'roles' => 'Bartender',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Lancel',
            'lastname' => 'Aurora',
            'roles' => 'Head Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Pierce John',
            'lastname' => 'Stevens',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Chastelaine',
            'lastname' => 'Salazar',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Joseph',
            'lastname' => 'Manuel',
            'roles' => 'Host',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Mark',
            'lastname' => 'Abdon',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'John Jericho',
            'lastname' => 'Medrana',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Jonas',
            'lastname' => 'Revilla',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Norwin',
            'lastname' => 'Bayhon',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Jerome',
            'lastname' => 'Bahia',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Ariell',
            'lastname' => 'Olegario',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Dennis',
            'lastname' => 'Ruiz',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		[
            'firstname' => 'Ford',
            'lastname' => 'Historia',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Daniel',
            'lastname' => 'Tuzon',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'James',
            'lastname' => 'Agrimano',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Daryll',
            'lastname' => 'Castromero',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Maria',
            'lastname' => 'Ascuncion',
            'roles' => 'Host',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Maricel',
            'lastname' => 'Tejano',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Ella',
            'lastname' => 'Noynay',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Ian',
            'lastname' => 'Marasigan',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Chen',
            'lastname' => 'Nepumuceno',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Mara',
            'lastname' => 'Rodriguez',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Ian',
            'lastname' => 'Alcoriza',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Joshua',
            'lastname' => 'Caldito',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Christine',
            'lastname' => 'Espinosa',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Hazel',
            'lastname' => 'Santiago',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Timothy',
            'lastname' => 'Galura',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Jett',
            'lastname' => 'Andrei',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Leonardo',
            'lastname' => 'Talens',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Kenneth',
            'lastname' => 'Villarin',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Willkins',
            'lastname' => 'Costa',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Calvin',
            'lastname' => 'Sales',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Emman',
            'lastname' => 'Ramos',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Rossette',
            'lastname' => 'King',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Mariel',
            'lastname' => 'Magracia',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Joshua',
            'lastname' => 'Alejo',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Julius',
            'lastname' => 'Israel',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Jake',
            'lastname' => 'Peralta',
            'roles' => 'Server',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Amy',
            'lastname' => 'Santiago',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Gina',
            'lastname' => 'Linetti',
            'roles' => 'Event Planner',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Rosa',
            'lastname' => 'Diaz',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Terry',
            'lastname' => 'Jeffords',
            'roles' => 'Setup Crew',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Raymond',
            'lastname' => 'Holt',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Charles',
            'lastname' => 'Boyle',
            'roles' => 'Chef',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Norm',
            'lastname' => 'Scully',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Michael',
            'lastname' => 'Hitchcock',
            'roles' => 'Dishwasher',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Doug',
            'lastname' => 'Judy',
            'roles' => 'Bartender',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'firstname' => 'Kevin',
            'lastname' => 'Cozner',
            'roles' => 'Supervisor',
            'is_assign'=> 'Available',
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
        ]
		

    );
    }
}
}