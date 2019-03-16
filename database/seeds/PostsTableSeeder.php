<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //filename no spaces//
               //filename no spaces//
                      //filename no spaces//
                             //filename no spaces//
                                    //filename no spaces//
                                        //50 max//
        $title = array("title of blogs", "BMW", "Toyota"); 
        $info = array("info of blogs",
         "BMW",
          "Toyota"); 
        $author = array("author of blogs", "BMW", "Toyota"); 
        $file = array("image filename here and save HD image each in folder", "BMW", "Toyota"); 

        for ($i=0; $i < 50; $i++) { 
            DB::table('contents')->insert([

                
               'title' => $title[$i],
               'info' => $info[$i],
               'author' => $author[$i],
               'file' => $file[$i],
               'is_active' => 1,
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s'),
   
           ]);
       }
    }
}
