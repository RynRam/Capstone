<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('venues')->get()->count() == 0){
        DB::table('venues')->insert([
            'name' => 'Republic of Cavite Restaurant',
            'address' => 'City Hall Road ,Trece Martires, Cavite',
            'contact_person' => 'Cecille',
            'contact'=> '046-4190214',
            'price' => 25000,
            'file' => 'republic of cavite resto.jpg', 
            'capacity' => 70,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Stat Events and Trends',
            'address' => 'EAM Building Barangay, Anabu 1D Aguinaldo Highway 2nd Floor Imus Cavite',
            'contact_person' => 'Althea',
            'contact'=> '09176921168',
            'price' => 20000,
            'file' => 'stat event trends.jpg', 
            'capacity' => 50,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
        [
            'name' => 'Mango Hills Garden',
            'address' => '40 Yakal Street, Calendola Village San Pedro Laguna',
            'contact_person' => 'Suzy',
            'contact'=> '0932-1883111',
            'price' => 75000,
            'file' => 'mangohills.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'The Monochrome',
            'address' => 'Venado. Santa Rosa City, Laguna',
            'contact_person' => 'Wilnel',
            'contact'=> '02-8464334',
            'price' => 55000,
            'file' => 'monochrome.jpg',
            'capacity' => 100,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Angelfields Nature Sanctuary',
            'address' => 'Tagaytay - Sta. Rosa Road. Purok 5 Barangay Pasong Langka .Tagaytay Cavite',
            'contact_person' => 'Baldo',
            'contact'=> '0917-5424024',
            'price' => 120000,
            'file' => 'angelfields.jpg',
            'capacity' => 300,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Hacienda Isabella',
            'address' => '8 Carasuchi Indang, 4122 Cavite',
            'contact_person' => 'Lola',
            'contact'=> '02-6252453',
            'price' => 150,000,
            'file' => 'hacienda.jpg',
            'capacity' => 400,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Fernbook Gardens',
            'address' => 'Daang Reyna Portofino South Las Pinas, 1750 Metro Manila. Las Pinas City',
            'contact_person' => 'Jeffrey',
            'contact'=> '02-7108454',
            'price' => 65,000,
            'file' => 'fernbook.jpg',
            'capacity' => 150,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'The Living Room Bar',
            'address' => '7610 Chestnut Street Amrcelo Green Village Paranaque, 1715 Metro Manila Paranaque City',
            'contact_person' => 'Edwin',
            'contact'=> '02-7751566',
            'price' => 15000,
            'file' => 'livingroom.jpg',
            'capacity' => 40,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Tagaytay Wedding Café',
            'address' => 'Tagaytay - Amadeo Road, Barangay Salaban Terrace Hill Resort, Amadeo, Cavite',
            'contact_person' => 'Jason',
            'contact'=> '046-4835307',
            'price' => 80,000,
            'file' =>'tagaytayweds.jpg', 
            'capacity' => 120,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Palacio De Maynila',
            'address' => '1809-1813 MH Del Pilar St. Manila City',
            'contact_person' => 'Mary',
            'contact'=> '02-5247606',
            'price' => 250000,
            'file' =>' palacio.jpg', 
            'capacity' => 400,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Plaza San Luis Complex',
            'address' => 'Geeral Luna Street cor Real St., Intramuros Manila, Metrol Manila',
            'contact_person' => 'Sergio',
            'contact'=> '02-5274084',
            'price' => 70000,
            'file' => 'plazasl.jpg', 
            'capacity' => 150,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Events Center',
            'address' => 'Kalayaan Avenue Makati Acity',
            'contact_person' => 'Josephine',
            'contact'=> '02-7056200',
            'price' => 55000,
            'file' => 'ec.jpg', 
            'capacity' => 90,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'The Pergola',
            'address' => 'Sen. Gil J. Puyat Avenue',
            'contact_person' => 'Andrei',
            'contact'=> '02-6171749',
            'price' => 90000,
            'file' => 'pergola.jpg', 
            'capacity' => 150,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'C&C Makati Event Venue',
            'address' => 'Malugay Makati, Metro Manila',
            'contact_person' => 'Tonyo',
            'contact'=> '0905-5541775',
            'price' => 128000,
            'file' => 'cc.jpg',
            'capacity' => 190,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		[
            'name' => 'Bayview Park Hotel',
            'address' => '1118 Roxas Boulevard Manila, 1000 Metro Manila',
            'contact_person' => 'Poy',
            'contact'=> '02-2479000',
            'price' => 255000,
            'file' => 'bayview park.jpg',
            'capacity' => 300,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Faustinos Events Place',
            'address' => '54 Tahimik St., Imus, 4103 Cavite',
            'contact_person' => 'Jen',
            'contact'=> '046-474 0234',
            'price' => 149000,
            'file' => 'faustino.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'The Farm Green and Saddle Resort',
            'address' => 'Amuntay Road, Dasmarinas, 4114 Cavite',
            'contact_person' => 'Mr. Sid',
            'contact'=> '0932 863 2807',
            'price' => 26000,
            'file' => 'farmgreen.jpg',
            'capacity' => 400,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Emps and Mels Patio',
            'address' => 'Nueno Avenue, City of Imus, Cavite',
            'contact_person' => 'MR. Patrik',
            'contact'=> '(046) 471-62-19/ 418-91-21',
            'price' => 30,000,
            'file' => 'empsmels.png',
            'capacity' => 60,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Chardan Events Place',
            'address' => '4103, 841 Emilio Aguinaldo Hwy, Anabu 1-D, Imus, Cavite',
            'contact_person' => 'Mrs. Marya',
            'contact'=> '(046) 686 2441',
            'price' => 76000,
            'file' => 'chardan.png',
            'capacity' => 130,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Garden Gazebo',
            'address' => 'Silang-Banaybanay Rd, Lucsuhin, Silang, 4118 Cavite',
            'contact_person' => 'Mrs. Sanchez',
            'contact'=> '(046) 443 2481',
            'price' => 280000,
            'file' => 'garden gazebo.jpg',
            'capacity' => 450,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'The Paradiso Terrestre',
            'address' => '1, 170933 National Road, Molino Highway, Molino IV, Cavite City',
            'contact_person' => 'Mr. Janzon',
            'contact'=> '(02) 584 4127',
            'price' => 190000,
            'file' =>' paradiso.jpg',
            'capacity' => 300,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Casa Ladrillo',
            'address' => 'Daang Hari Road, Imus Cavite',
            'contact_person' => 'Mrs. Diaz',
            'contact'=> '0917 820 9211',
            'price' => 325000,
            'file' =>' casa ladrillosa.jpg',
            'capacity' => 500,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Satis Place Party Venue',
            'address' => 'Avenida Rizal, Molino 5, Bacoor, Cavite',
            'contact_person' => 'Mr. Tolentino',
            'contact'=> '(046) 477 0580',
            'price' => 80000,
            'file' => 'satis place venue.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Hannahs Garden Event Place',
            'address' => 'Silang Road, Calamba, Laguna',
            'contact_person' => 'Mrs. Roxas',
            'contact'=> '0977 804 9156',
            'price' => 90000,
            'file' =>' hannahs.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Torreno Resort And Pavillion',
            'address' => 'Dagohoy St. Extenson Bahayang Pag-asa Phase 1, Molino, Bacoor, Cavite',
            'contact_person' => 'Kenneth',
            'contact'=> '(046) 416 7517',
            'price' => 50000,
            'file' => 'torreno resort.jpg',
            'capacity' => 100,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Patio Buendia',
            'address' => 'C.M De Los Reyes Ave, Amadeo, 4119 Cavite',
            'contact_person' => 'Event Planner',
            'contact'=> '(046) 686 8066',
            'price' => 55000,
            'file' =>'patio bbb.jpg',
            'capacity' => 100,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Aminsana Tagaytay Events Place',
            'address' => 'A. Mabini St., Barangay Cinco, Amadeo, Cavite',
            'contact_person' => 'Supervisor',
            'contact'=> '(02) 401 4825',
            'price' => 175000,
            'file' => 'aminsana.png',
            'capacity' => 400,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'S. Cassandras Place Events Venue Resort',
            'address' => 'San Francisco Road, Binan, Laguna',
            'contact_person' => 'Dishwasher',
            'contact'=> '0917 898 5113',
            'price' => 34000,
            'file' => 'cassandras place.jpg',
            'capacity' => 40,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Takahara Hotel & Events Place',
            'address' => 'San Antonio, San Pedro Laguna',
            'contact_person' => 'Server',
            'contact'=> '(02) 984 0654',
            'price' => 140000,
            'file' => 'takahara.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'South Country Garden',
            'address' => 'Block 4 Lot 1 Panorama Ville, barangay Dita, Santa Rosa, Laguna',
            'contact_person' => 'Event Planner',
            'contact'=> '0917 673 3017',
            'price' => 100000,
            'file' => 'south country.png',
            'capacity' => 150,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'C-Summit Events Place',
            'address' => 'Jp Rizal St, Calamaba, Laguna',
            'contact_person' => 'Server',
            'contact'=> '0928 378 6021',
            'price' => 50000,
            'file' => 'csummit.jpg',
            'capacity' => 80,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Zion Events Place',
            'address' => 'San Antonio, San Pedro  Laguna',
            'contact_person' => 'Dishwasher',
            'contact'=> '0921 961 5157',
            'price' => 130,000,
            'file' => 'zion.jpg',
            'capacity' => 200,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Lakehouse San Pablo Events Place',
            'address' => '645 Sabang Road, Concepcion, San Pablo City, Laguna',
            'contact_person' => 'Setup Crew',
            'contact'=> '(046) 573 0115',
            'price' => 50000,
            'file' => 'lakehouse.jpg',
            'capacity' => 80,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'Patio Fernando',
            'address' => '41 Magsaysay Road San Antonio San Pedro, Laguna',
            'contact_person' => 'Dishwasher',
            'contact'=> '0998 8898 048',
            'price' => 70000,
            'file' => 'patio fernandos.jpg',
            'capacity' => 80,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
		
		[
            'name' => 'South Yard Events Place',
            'address' => 'National Highway, Santa Cruz, Laguna',
            'contact_person' => 'Mr. Roman',
            'contact'=> '0906 293 3210',
            'price' =>  100000,
            'file' =>'southy.jpg',
            'capacity' => 150,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
    );
    }
}}
