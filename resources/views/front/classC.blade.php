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
              <h2 class="title">WEDDING C</h2>
							<h2 class="title">{{$packages}} price per head</h2>
              <p>
                <ul>
                	<li style="list-style: none;"><b>Main Entrée</b>
                		<ul>
                			<li>Beef, Pork, Chicken, Vegetable and Pasta</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Flowers</b>
                		<ul>
                			<li>Each Table Glass Centerpiece</li>
                			<li>Cake Table and Bird Cage</li>
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
                			<li>Backdraft Palochina, Cleopatra Sofa, Lights Pillar, Grass Design Backdraft, Bulb Lights, Design Stage, Center Flowers Design, Console Table, Platform with Carpet </li>
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
                			<li>Note: One Buffet 190pax Below</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"> <u>MENU</u></li>

                	<div class="col-md-12"> 
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 1</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Roast Beef</li>
			                			<li><b>Pork:</b>Pork Loin with Honey</li>
			                			<li><b>Chicken:</b>Chicken Roll </li>
			                			<li><b>Vegetable:</b>Seven Kinds </li>
			                			<li><b>Pasta:</b>Baked Macaroni</li>
			                			<li><b>Dessert:</b>Buko Salad</li>
			                		</ul>
			                	</li>
	                	 </div>
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 2</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Mechado</li>
			                			<li><b>Pork:</b>Lumpiang Shanghai</li>
			                			<li><b>Chicken:</b>Chicken Asado</li>
			                			<li><b>Vegetable:</b>Chapsuey</li>
			                			<li><b>Pasta:</b>Pansit Malabon</li>
			                			<li><b>Dessert:</b>Fruit Salad</li>
			                		</ul>
			                	</li>
	                	 </div>
                	</div>
                	<div class="col-md-12"> 
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 3</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Beed in Mushroom Sauce</li>
			                			<li><b>Pork:</b>Korean Barbeque</li>
			                			<li><b>Chicken:</b>Chicken Pastel</li>
			                			<li><b>Vegetable:</b> Corn and Carrots in Butter </li>
			                			<li><b>Pasta:</b>Spaghetti</li>
			                			<li><b>Dessert:</b>Buko Pandan</li>
			                		</ul>
			                	</li>
	                	 </div>
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 4</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Caldereta</li>
			                			<li><b>Pork:</b>Hawaiian Pork Roll</li>
			                			<li><b>Chicken:</b> Chicken Fillet with Tartar Sauce</li>
			                			<li><b>Vegetable:</b>Seafood Galore</li>
			                			<li><b>Pasta:</b>Carbonara</li>
			                			<li><b>Dessert:</b>Tropical Salad</li>
			                		</ul>
			                	</li>
	                	 </div>
                	</div>
                	<div class="col-md-12"> 
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 5</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Beef Teriyaki</li>
			                			<li><b>Pork:</b>Menudo</li>
			                			<li><b>Chicken:</b> Fried Chicken</li>
			                			<li><b>Vegetable:</b>Buttered Vegetable</li>
			                			<li><b>Pasta:</b>Baked Macaroni</li>
			                			<li><b>Dessert:</b>Gelatin with Fruits</li>
			                		</ul>
			                	</li>
	                	 </div>
	                	 <div class="col-md-5" style="display: -webkit-inline-box;">
				               	<li style="list-style: none;" ><u><b>Package 6</b></u>
			                		<ul>
			                			<li><b>Beef:</b>Beef Stew</li>
			                			<li><b>Pork:</b>Lechon Kawali</li>
			                			<li><b>Chicken:</b>Chicken Garlic Lemon Sauce</li>
			                			<li><b>Vegetable:</b>Garden Vegetable in Vegetable	</li>
			                			<li><b>Pasta:</b>Pansit Puso</li>
			                			<li><b>Dessert:</b>Buko Salad</li>
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