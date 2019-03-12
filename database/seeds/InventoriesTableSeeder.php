<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if(DB::table('inventories')->get()->count() == 0){
        DB::table('inventories')->insert([[
            'item_code' => 'ST00001',
            'item_name' => 'Table',
            'warehouses_id' => 1,
            'inventory_categories_id' => 1,
            'price' => 1500,
            'stock_on_hand' => 300,
            'damage' => 2,
            'defect' =>10,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00002',
            'item_name' => 'Long Table',
            'warehouses_id' => 2,
            'inventory_categories_id' => 1,
            'price' => 1500,
            'stock_on_hand' => 300,
            'damage' => 2,
            'defect' =>10,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ], 
        [
            'item_code' => 'ST00003',
            'item_name' => 'Monoblock Chairs',
            'warehouses_id' => 4,
            'inventory_categories_id' => 1,
            'price' => 500,
            'stock_on_hand' => 700,
            'damage' => 20,
            'defect' =>30,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00004',
            'item_name' => 'Fork',
            'warehouses_id' => 6,
            'inventory_categories_id' => 2,
            'price' => 50,
            'stock_on_hand' => 1000,
            'damage' => 0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
         [
            'item_code' => 'ST00005',
            'item_name' => 'Spoons',
            'warehouses_id' => 4,
            'inventory_categories_id' => 2,
            'price' => 50,
            'stock_on_hand' => 1000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00006',
            'item_name' => 'Teaspoons',
            'warehouses_id' => 8,
            'inventory_categories_id' => 2,
            'price' => 25,
            'stock_on_hand' => 1000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00007',
            'item_name' => 'Wine Glass',
            'warehouses_id' => 9,
            'inventory_categories_id' => 2,
            'price' => 100,
            'stock_on_hand' => 1500,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00008',
            'item_name' => 'Drinking Glass',
            'warehouses_id' => 9,
            'inventory_categories_id' => 2,
            'price' => 100,
            'stock_on_hand' => 1500,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00009',
            'item_name' => 'Oscillating light System',
            'warehouses_id' => 10,
            'inventory_categories_id' => 3,
            'price' => 10000,
            'stock_on_hand' => 20,
            'damage' =>  2,
            'defect' => 5,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00010',
            'item_name' => 'Focused Light System',
            'warehouses_id' => 5,
            'inventory_categories_id' => 3,
            'price' => 5000,
            'stock_on_hand' => 20,
            'damage' =>  5,
            'defect' => 1,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00011',
            'item_name' => 'Colander',
            'warehouses_id' => 4,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00012',
            'item_name' => 'Frying Pan',
            'warehouses_id' => 10,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00013',
            'item_name' => 'Boiling Pan',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00014',
            'item_name' => 'Spatula',
            'warehouses_id' => 6,
            'inventory_categories_id' => 2,
            'price' => 175,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00015',
            'item_name' => 'Tongs',
            'warehouses_id' => 1,
            'inventory_categories_id' => 2,
            'price' => 175,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
          [
            'item_code' => 'ST00016',
            'item_name' => 'Rice Cooker',
            'warehouses_id' => 2,
            'inventory_categories_id' => 3,
            'price' => 1500,
            'stock_on_hand' => 50,
            'damage' =>  5,
            'defect' => 1,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
       [
            'item_code' => 'ST00017',
            'item_name' => 'Chocolate Fountain',
            'warehouses_id' => 7,
            'inventory_categories_id' => 3,
            'price' => 3000,
            'stock_on_hand' => 20,
            'damage' =>  2,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
       [
            'item_code' => 'ST00018',
            'item_name' => 'Cooler',
            'warehouses_id' => 8,
            'inventory_categories_id' => 3,
            'price' => 1500,
            'stock_on_hand' => 50,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
       [
            'item_code' => 'ST00019',
            'item_name' => 'Table Cloth',
            'warehouses_id' => 2,
            'inventory_categories_id' => 4,
            'price' => 300,
            'stock_on_hand' => 2000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
       [
            'item_code' => 'ST00020',
            'item_name' => 'Premium Chairs',
            'warehouses_id' => 10,
            'inventory_categories_id' => 1,
            'price' => 1000,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
       [
            'item_code' => 'ST00021',
            'item_name' => 'Flower Vase',
            'warehouses_id' => 2,
            'inventory_categories_id' => 4,
            'price' => 250,
            'stock_on_hand' => 250,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'item_code' => 'ST00022',
            'item_name' => 'Candles',
            'warehouses_id' => 5,
            'inventory_categories_id' => 4,
            'price' => 35,
            'stock_on_hand' => 1000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'item_code' => 'ST00023',
            'item_name' => 'Electic Stove',
            'warehouses_id' => 6,
            'inventory_categories_id' => 3,
            'price' => 5000,
            'stock_on_hand' => 70,
            'damage' =>  10,
            'defect' => 1,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00024',
            'item_name' => 'High Speed Fan',
            'warehouses_id' => 1,
            'inventory_categories_id' => 3,
            'price' => 10000,
            'stock_on_hand' => 30,
            'damage' =>  0,
            'defect' => 5,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00025',
            'item_name' => 'Sauce Pan',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 50,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00026',
            'item_name' => 'Griddle Pan',
            'warehouses_id' => 8,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 100,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00027',
            'item_name' => 'Pressure Cooker',
            'warehouses_id' => 4,
            'inventory_categories_id' => 4,
            'price' => 500,
            'stock_on_hand' => 1000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00028',
            'item_name' => 'Plates',
            'warehouses_id' => 9,
            'inventory_categories_id' => 2,
            'price' => 75,
            'stock_on_hand' => 15000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00029',
            'item_name' => 'Water Jug',
            'warehouses_id' => 3,
            'inventory_categories_id' => 2,
            'price' => 1500,
            'stock_on_hand' => 80,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00030',
            'item_name' => 'Trash Can',
            'warehouses_id' => 7,
            'inventory_categories_id' => 6,
            'price' => 500,
            'stock_on_hand' => 80,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00031',
            'item_name' => 'Serving Tray',
            'warehouses_id' => 10,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
            'item_code' => 'ST00032',
            'item_name' => 'Salt Shaker',
            'warehouses_id' => 10,
            'inventory_categories_id' => 2,
            'price' => 50,
            'stock_on_hand' => 500,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
            [
            'item_code' => 'ST00033',
            'item_name' => 'Table Napkins',
            'warehouses_id' => 5,
            'inventory_categories_id' => 4,
            'price' => 35,
            'stock_on_hand' => 2000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00034',
            'item_name' => 'Chafing Dishes',
            'warehouses_id' => 8,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 150,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00035',
            'item_name' => 'Electric Fryer',
            'warehouses_id' => 9,
            'inventory_categories_id' => 3,
            'price' => 1500,
            'stock_on_hand' => 80,
            'damage' =>  0,
            'defect' => 10,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00036',
            'item_name' => 'Juice Dispenser',
            'warehouses_id' => 4,
            'inventory_categories_id' => 2,
            'price' => 1500,
            'stock_on_hand' => 80,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00037',
            'item_name' => 'Tiered Tray',
            'warehouses_id' => 7,
            'inventory_categories_id' => 5,
            'price' => 500,
            'stock_on_hand' => 25,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00038',
            'item_name' => 'Chef Torch',
            'warehouses_id' => 6,
            'inventory_categories_id' => 2,
            'price' => 1000,
            'stock_on_hand' => 80,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00039',
            'item_name' => 'Microwave',
            'warehouses_id' => 2,
            'inventory_categories_id' => 3,
            'price' => 2500,
            'stock_on_hand' => 25,
            'damage' =>  3,
            'defect' => 5,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
                [
            'item_code' => 'ST00040',
            'item_name' => 'Bread Knife',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 150,
            'stock_on_hand' => 1500,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
                [
            'item_code' => 'ST00041',
            'item_name' => 'Microwave',
            'warehouses_id' => 2,
            'inventory_categories_id' => 3,
            'price' => 2500,
            'stock_on_hand' => 25,
            'damage' =>  3,
            'defect' => 5,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
                  [
            'item_code' => 'ST00042',
            'item_name' => 'Rolling Pin',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 200,
            'stock_on_hand' => 200,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
      [
            'item_code' => 'ST00043',
            'item_name' => 'Blender',
            'warehouses_id' => 6,
            'inventory_categories_id' => 3,
            'price' => 1500,
            'stock_on_hand' => 50,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00044',
            'item_name' => 'Dessert Plate',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 250,
            'stock_on_hand' => 10000,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00045',
            'item_name' => 'Pepper Shaker',
            'warehouses_id' => 5,
            'inventory_categories_id' => 2,
            'price' => 50,
            'stock_on_hand' => 500,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00046',
            'item_name' => 'Speakers Large',
            'warehouses_id' => 5,
            'inventory_categories_id' => 3,
            'price' => 7000,
            'stock_on_hand' => 20,
            'damage' =>  0,
            'defect' => 1,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00047',
            'item_name' => 'Speakers Small',
            'warehouses_id' => 6,
            'inventory_categories_id' => 3,
            'price' => 5000,
            'stock_on_hand' => 30,
            'damage' =>  0,
            'defect' => 2,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00048',
            'item_name' => 'Microphone',
            'warehouses_id' => 3,
            'inventory_categories_id' => 3,
            'price' => 2500,
            'stock_on_hand' => 10,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00049',
            'item_name' => 'Microphone Stand',
            'warehouses_id' => 4,
            'inventory_categories_id' => 3,
            'price' => 1000,
            'stock_on_hand' => 10,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ],
              [
            'item_code' => 'ST00050',
            'item_name' => 'Candle Stand',
            'warehouses_id' => 5,
            'inventory_categories_id' => 4,
            'price' => 1000,
            'stock_on_hand' => 10,
            'damage' =>  0,
            'defect' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]]
    );
    }}
}
