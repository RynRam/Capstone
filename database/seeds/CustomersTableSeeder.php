<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        DB::table('customers')->insert([
         [
            'id' => 5,
            'fname' => 'Chase',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'ChaseDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'id' => 6,
            'fname' => 'Case',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CaseDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'id' => 7,
            'fname' => 'Claude',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'ClaudeDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'id' => 8,
            'fname' => 'Camilla',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CamilleDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'id' => 9,
            'fname' => 'Camille',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CamilleaDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [   'id' => 10,
            'fname' => 'Cheyenne',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CheyenneDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [   'id' => 11,
            'fname' => 'Cage',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CageDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [   'id' => 12,
            'fname' => 'Cade',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CadeDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [   'id' => 13,
            'fname' => 'Cale',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CaleDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [   'id' => 14,
            'fname' => 'Cree',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CreeDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 15,
            'fname' => 'Courage',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CourageDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 16,
            'fname' => 'Carlyle',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CarlyleDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'id' => 17,
            'fname' => 'Coltrane',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'ColtraneDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 18,
            'fname' => 'Clyde',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'ClydeDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 19,
            'fname' => 'Corrie',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CorrieDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 20,
            'fname' => 'Cruise',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' => 'Imus,Cavite',
            'email' =>'CruiseDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 21,
            'fname' => 'Clarence',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'ClarenceDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
    [
            'id' => 22,
            'fname' => 'Clive',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CliveDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
    [
            'id' => 23,
            'fname' => 'Claire',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite' ,
            'email' =>'ClaireDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 24,
            'fname' => 'Channe',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'ChanneDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 25,
            'fname' => 'Codie',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' => 'Imus,Cavite',
            'email' =>'CodieDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 26,
            'fname' => 'Chaz',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' =>  'General Trias',
            'email' =>'ChazDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 27,
            'fname' => 'Chance',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ChanceDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 28,
            'fname' => 'Charlie',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'CharlieDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 29,
            'fname' => 'Clayborne',
            'lname' => 'Doe',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ClayborneDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 30,
            'fname' => 'Christie',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ChristieDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 31,
            'fname' => 'Cyrene',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' =>  'General Trias',
            'email' =>'CyreneDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'id' => 32,
            'fname' => 'Clement',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ClementDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'id' => 33, 
            'fname' => 'Hope',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' =>  'General Trias',
            'email' =>'HopeDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
            'id' => 34,
            'fname' => 'Chancellor',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ChancellorDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
            'id' => 35,
            'fname' => 'Claudia',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ClaudiaDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
            'id' => 36,
            'fname' => 'Christian',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'ChristianDoe@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 37,
            'fname' => 'Alexia',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample' ,
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AlexiaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 38,
            'fname' => 'Amelia',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AmeliaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 39,
            'fname' => 'Annabel',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'Dasmariñas',
            'email' =>'AnnabelOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
                'id' => 40,
            'fname' => 'Aishah',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' =>  'General Trias',
            'email' =>'AishahOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
                'id' => 41,
            'fname' => 'Annabelle',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'Dasmañas',
            'email' =>'AnnabelleOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
                [
                    'id' => 42,
            'fname' => 'Alek',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null,
            'address' =>  'General Trias',
            'email' =>'AlekOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
    [
        'id' => 43,
            'fname' => 'Abigail',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AbigailOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 44,
            'fname' => 'Alma',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AlmaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 45,
            'fname' => 'Ada',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AdaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 46,
            'fname' => 'Angela',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AngelaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 47,
            'fname' => 'Angel',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AngelOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 48,
            'fname' => 'Angelica',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AngelicaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 49,
            'fname' => 'Ayah',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AyahOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
                'id' => 50,
            'fname' => 'Ayla',
            'lname' => 'Owens',
            'contact' => '09158547791',
            'facebook' => '/sample',
            'twitter' => '/sample',
            'gplus' => null ,
            'address' =>  'General Trias',
            'email' =>'AylaOwens@gmail.com',
            'password' => bcrypt('secret'),
            'is_verified' => 1,
            'verification_token' =>null ,
            'remember_token' => str_random(40),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]]
    );
    }}
    
