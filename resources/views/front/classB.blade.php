@extends('layouts.frontLayout.front_custom')
@section('content')
 <style type="text/css">
 	ul li{
 		color: #000;
 		font-weight: 500;
 		font-family: "Montserrat", sans-serif;
 	}
	 #about {
    position: relative;
    padding: 40px 0;
    background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center;
    background-size: cover;
	}
	.section-header h3{
		color:#fff;
	}
 </style>
  <main id="main">
<!-- about section -->
     <section id="about" style="margin: 50px 0 0 0;">
      <div class="container">

        <header class="section-header">
          <h3>Menu</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp data-wow-delay="0.1s"">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-book-outline"></i></div>
              </div>
              <h2 class="title">WEDDING B</h2>
							<h2 class="title">{{$packages}} price per head</h2>
              <p>
                <ul>
                	<li>Appetizer and One Dessert</li>
                	<li style="list-style: none;"><b>Main Entrée</b>
                		<ul>
                			<li>Beef, Pork, Chicken, Vegetable and Pasta</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Flowers</b>
                		<ul>
                			<li>Each Table (Candelabra Flowers) and Bird Cage</li>
                			<li>Back drop full arrangements at Stage and Presidential table full arrangements</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Tables</b>
                		<ul>
                			<li>Presidential Table 16 Pax Only</li>
                			<li>Secondary (optional)</li>
                			<li>Guest</li>
                			<li>Registration, Cake, Gift, Dessert, Bar for Beverages and Buffet</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Amenities</b>
                		<ul>
                			<li>Bottle of sparkling wine for Ceremonial Toast for Bride and Groom</li>
                			<li>Decorated birdcage with a pair of white doves with floral arrangement</li>
                			<li>Complete chinaware, silverware and glasses</li>
                			<li>Spotlight for the buffet table</li>
                			<li>Arrangements for the buffet table and Spotlight</li>
                			<li>Monoblock Plastic Chairs with Floor Length Covers and Color Motif and Ribbon</li>
                			<li>Candelabra Centerpiece on each Individual Table with Candles</li>
                			<li>Red Carpet</li>
                			<li>Rice extra 20% on total Guest</li>
                			<li>Trained Waiters</li>
                			<li>Motif Color on Decoration</li>
                			<li>Table Number</li>
                			<li>Tiffany Chairs for Bride and Groom only</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Beverages</b>
                		<ul>
                			<li>3 Glasses Iced tea (with Lemon and Honey…Nestle Products) for welcome Drinks</li>
                			<li>Tube ice and Purified Drinking Water</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Stage Décorations</b>
                		<ul>
                			<li>Backdraft Palochina, Cleopatra Sofa, Lights Pillar, Grass Design Backdraft, Bulb Lights, Design Stage, Flowers Design, Console Table, Platform with Carpet </li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Amenities</b>
                		<ul>
                			<li>Welcome drinks and Appetizer serve when the guest arrive</li>
                			<li>No Vat, No Service Charge, No Corkage Fee Like liquors or litson, No charge on per head excess, No Extra Charge after the event Fix rate.</li>
                			<li>20% Buffer on Food Serving</li>
                			<li>Waiters have their own meal. Separate from the buffet</li>
                			<li>With coordination of the event (like floor plan, suppliers, program etc.…)</li>
                			<li>Kids are free (below 8 years old and 10% on Contract)</li>
                			<li>Full Arrangements Flowers (check picture at Facebook)</li>
                			<li>Roll top Warmers</li>
                			<li>Free use of all catering food equipment’s if you have your own food(rules applied)</li>
                			<li>Note: One Buffet 180pax Below</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"> <u>MENU</u></li>

                	<div class="col-md-12"> 
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><b>Beef</b>
			                		<ul>
			                			<li>Roast beef</li>
			                			<li>Braised Beef with Potato</li>
			                			<li>Beef Caldereta </li>
			                			<li>Beef in Mushroom </li>
			                			<li>Beef Morcon</li>
			                			<li>Beef Brocoli w/ Oyster Sauce</li>
			                			<li>Beef in Mechado</li>
			                			<li>Lengua with Estofado</li>
			                			<li>Lengua with Brocolli</li>
			                			<li>Hawaiian Meat Roll</li>
			                			<li>Callos</li>
			                			<li>Kare Kare Baka w/ Bagoong</li>
			                			<li>Hawaiian Meat Roll</li>
			                			<li>Callos</li>
			                			<li>Kare Kare Baka w/ Bagoong</li>
			                		</ul>
			                	</li>
	                	 </div>
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;"><b>Pork </b>
			                		<ul>
			                			<li>Pork Meat Loaf w/ Cream Sauce</li>
			                			<li>Roasted Pork Asado </li>
			                			<li>Menudo </li>
			                			<li>Pork Fillet w/ tatar sauce </li>
			                			<li>Pork Ham Rolled with Pineapple </li>
			                			<li>Special Lumpiang Shanghai</li>
			                			<li>Korean Barbeque</li>
			                			<li>Litson Kawali</li>
			                			<li>Chili Pork Honey</li>
			                			<li>Sweet sour Meat Balls </li>
			                			<li>Asado with Pineapple</li>
			                			<li>Sweet Fruity Pork</li>
			                			<li>Roast Pork with Honey Fruity</li>
			                			<li>Bopis </li>
			                			<li>Adobong Binagoongan </li>
			                		</ul>
			                	</li>
	                	</div>
                	</div>
                  	<div class="col-md-12"> 
                	 <div class="col-md-5" style="display: -webkit-inline-box;">
			               	<li style="list-style: none;" ><b>Chicken</b>
		                		<ul>
		                			<li>Spicy Honeyed Chicken Wings </li>
		                			<li>Chicken Breast Galantina</li>
		                			<li>Chicken Curry</li>
		                			<li>Cordon Blue with mango </li>
		                			<li>Chicken Pork Adobo in Liver Sauce</li>
		                			<li>Chicken Strip with Mushroom Sauce</li>
		                			<li>Chicken in Hoi sin Sauce</li>
		                			<li>Orange Chicken in Sweet Sauce</li>
		                			<li>Chinese Fried Chicken </li>
		                			<li>Chicken Fillet Tatar Lemon Sauce</li>
		                			<li>Chicken Asado </li>
		                			<li>Chicken Pineapple Honey </li>
		                			<li>Chicken cashew</li>
		                			<li>Chicken Broccoli with Oyster Sauce</li>
		                			<li>Chicken Roll</li>
		                			<li>Afritada </li>
		                		</ul>
		                	</li>
                	 </div>
                	 <div class="col-md-5" style="display: -webkit-inline-box;">
			               	<li style="list-style: none;"><b>Vegetables </b>
		                		<ul>
		                			<li>Seafood galore</li>
		                			<li>Hawaiian Coleslaw </li>
		                			<li>Potato Salad  </li>
		                			<li>Shrimp with Quail Egg</li>
		                			<li>Seven Kinds </li>
		                			<li>Chap suey </li>
		                			<li>Buttered Vegetable </li>
		                			<li>Chicken Macaroni Salad</li>
		                			<li>Chef Salad</li>
		                			<li>Garden Vegetable w Broccoli </li>
		                			<li>Chap suey </li>
		                			<li>Buttered Vegetable </li>
		                			<li>Chicken Macaroni Salad</li>
		                			<li>Chef Salad</li>
		                			<li>Chicken Macaroni Salad</li>
		                			<li>Chef Salad</li>
		                		</ul>
		                	</li>
                	</div>
                	</div>
                  	<div class="col-md-12"> 
                	 <div class="col-md-5" style="display: -webkit-inline-box;">
			               	<li style="list-style: none;" ><b>Noodles and Pasta</b>
		                		<ul>
		                			<li>Spaghetti</li>
		                			<li>Fettuccini carbonara</li>
		                			<li>Pansit Malabon</li>
		                			<li>Pansit Sotanghon  </li>
		                			<li>Baked Macaroni</li>
		                			<li>Pansit Puso</li>
		                			<li>Chinese Pansit Canton</li>
		                			<li>Pansit Guisado</li>
		                			<li>Pad Thai</li>
		                		</ul>
		                	</li>
                	 </div>
                	 <div class="col-md-5" style="display: -webkit-inline-box;">
			               	<li style="list-style: none;"><b>Dessert</b>
		                		<ul>
		                			<li>Fruit Salad</li>
		                			<li>Tropical Salad</li>
		                			<li>Leche Flan  </li>
		                			<li>Ube Macapuno</li>
		                			<li>Ube Macapuno</li>
		                			<li>Buko Lychee </li>
		                			<li>Buko Pandan </li>
		                			<li>Buko Salad </li>
		                			<li>Gelatin with Fruit Cocktail  </li>
		                		</ul>
		                	</li>
                	</div>
                	</div>
                </ul>
              </p>
            </div>
          </div>


        </div>

      </div>
    </section>
      
</main>
 @endsection