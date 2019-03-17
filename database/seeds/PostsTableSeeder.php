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
        $title = array("5 BEAUTIFUL WEDDING VENUES IN AND AROUND THE METRO", "CREATIVE WEDDING RECEPTION IDEAS", "WEDDING FOOD CATERING: COCKTAIL STYLE WEDDING RECEPTION","5 REASONS WHY FOOD SERVICE NEEDS TO BE CONSIDERED WHEN PLANNING YOUR WEDDING","WAYS TO MAKE THE MOST OUT OF YOUR WEDDING CATERING","6 POPULAR WEDDING FOOD CATERING STYLES","JUAN CARLO – THE WEDDING","14 GRAND RECEPTION STYLING DESIGNS THAT WILL WOW YOU","THIS COUPLE’S GLAMOROUS RECEPTION WILL MAKE YOU FEEL LIKE YOU’RE WATCHING FIREWORKS","How to Plan a Marvelous Boston Gala","Rental Must-Haves for Wedding Season","The Art of Tenting","Trend Alert: Pops of Color","Lighting Installations to Elevate Your Client’s Event","The Path to Event Inspiration","Trend Alert: Global Patterns","Up the Ante with Holiday Parties","Marrying Food & Event Planning","Rental Must-Haves for the Holiday Season","Technology Lights Up Any Holiday Event","Your Checklist for Pulling Off the Perfect Fall Event","Navigating Tricky Vendor Relationships","What to Do When Event Timelines Conflict","Trend Alert: Unique Textures","Purchasing Tips for Candles"); 
        $info = array("Looking for the right wedding catering services for your upcoming marriage might be a straightforward affair. how can you make it happen without the right venue?",
        	"One of the best part about a wedding—any event, really — is the actual planning process of where the reception will be held after the formal program is done.",
        	"Among the modern ways of planning a nuptial event which includes the wedding food catering, and all, what appeals to couples these days is the so-called cocktail wedding style.",
        	"Wedding catering services are always around to help you with your grand and special day. ",
        	"Many couples leave the wedding food catering necessities to the experts. All they end up doing is paying their dues and letting the caterers do the magic. ",
        	"Many couples leave the wedding food catering necessities to the experts. All they end up doing is paying their dues and letting the caterers do the magic.",
        	"Back then, you didn’t really need to think much about food catering services. After you’ve chosen a venue, you would either go for a sit-down dinner or a buffet-style dinner.",
        	"From the moment we received our wedding invitation to the del Rosario – Valladolid (JC & Pia),  we knew it was going to be a wedding like no other.",
        	"We’re especially in awe of grand reception styling–the abundance of flowers, sparkle, and other grand elements and details totally make these types of weddings an experience to remember.",
        	"Original article courtesy of Bride and Breakfast This couple is taking grand to the next level with their wedding–especial.",
        	"Gaining support for your mission starts with knowing who you are trying to reach and what inspires them. With this clear understanding in mind and experts by your side.",
        	"Wedding season is just around the corner and it’s time to start making your rental plans.outdoor events and inclement weather are all special considerations rentals.",
        	"Out in the catering and hospitality business might be slightly taken aback when they learn that a tent could be custom built.",
        	"The Pantone Color of the Year, Living Coral, is helping to bring a fabulous new year of design to life. Subtlety is falling by the wayside as bright, happy shades join coral.",
        	"Professional event lighting is an art. Among design elements, it is in the top echelon of those that can completely transform a space, elevating everyday events to extraordinary levels.",
        	"I strongly believe every company must choose from one of two distinct paths as to where they want to be in their event and catering businesses.",
              "In today’s society, it’s as easy to speak to someone on the other side of the world as someone in the next room. Cultural influences from all around in our daily lives.",
              "It seems impossible, but the holidays are right around the corner once again. While this is a time of year when many people find great pleasure in the traditional.",
              "This generation that popularized the foodie culture, invented the concept of photographing each meal, on the event experience—and the menu is integral to it.",
              "Among the best ways to transform a room from everyday okay to seasonal sensation is to choose the perfect rentals. ",
              "Attending the office Christmas party or a neighbor’s holiday gathering may be one person’s idea of fun.it can be a social nightmare. Familiar faces with uncomfortable chatter.",
              "In recent years, the event industry has witnessed a pretty significant shift in popularity from the tried-and-true summer event to the eclectic, seasonal fall event.",
              "In a highly competitive industry, maintaining positive, fruitful relationships with your fellow vendors can be more than a little bit challenging.",
              "A timeline is nothing less than the backbone of an event—an essential part that can make a day a great success or an epic fail.",
              "Here are some ways that our panel of internationally-recognized wedding professionals expect to see them take center stage in 2018.",
              "Most event professionals recognize the transformative power of lighting on a venue. Candles of all ilk play an essential role in lighting design."); 
        $author = array("Maigne","Maigne", "Maigne","Maigne","Maigne","Maigne","Maigne","Maigne","Maigne","Charlie Bougas","Heather Rouffe","International Caterers Association","Kylie Carlson","Kevin Dennis","Sebastien Centner","Kylie Carlson","Meghan Ely","Emily Sullivan","Heather Rouffe","National Association for Catering and Events","Heather Jones","Emily Sullivan","Kevin Dennis","Kylie Carlson","Audrey Isaac"); 
        $file = array("1.jpg", "2.jpg", "3.jpeg","4.jpg","5.jpg","6.jpeg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg","21.jpg","22.jpg","23.jpg","24.jpg","25.jpg"); 

        for ($i=0; $i < 25; $i++) { 
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
