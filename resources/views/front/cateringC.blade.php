@extends('layouts.frontLayout.front_custom1')
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
	#about .about-col {
		background: #18d26e;
		border-radius: 0 0 4px 4px;
		box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
		margin-bottom: 20px;
	}
	#about .about-col h2 {
  color: #000;
  text-align: center;
  font-weight: 700;
  font-size: 20px;
  padding: 0;
  margin: 40px 0 12px 0;
}

#about .about-col h2 a {
  color: #000;
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
              <h2 class="title">BASIC C</h2>
							<h2 class="title">{{$packages}} price per head</h2>
              <p>
                <ul>
                	<li style="list-style: none;"><b>Main Entrée</b>
                		<ul>
                			<li>Beef, Chicken, Pork, Vegetable, Pasta</li>
                		</ul>
                	</li>

                	<li style="list-style: none;"><b>Tables</b>
                		<ul>
                			<li>Buffet Table and Dessert Table</li>
                			<li>Cake Table and Dessert Table</li>
                			<li>Round table for guest</li>
                			<li>Registration Table on entrance and Bar Counter for Beverages</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Amenities</b>
                		<ul>
                			<li>One free guest table, No delivery charge.</li>
                			<li>NO Vat, NO Service Charge, 20% Buffer on Food Serving. </li>
                			<li>NO Corkage Fee like liquors or listen, No charge on per head excess</li>
                			<li>fix rate. NO Extra Charge after the event</li>
                			<li>Waiters have their own meal. Separate from the buffet</li>
                			<li>With coordination of the event (Like floor plan, suppliers, program etc....)</li>
                			<li>Kids are free (Below 8 years old)</li>
                			<li>Free tube ice on liquors, More Service Staff</li>
                			<li>Free use of all catering food equipment if you have your own food</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Beverages</b>
                		<ul>
                			<li>Service 2-3 glasses per guest</li>
                			<li>Iced tea Nestle products with lemon and honey</li>
                            <li>Purified drinking water, Tube Ice	</li>
                		</ul>
                	</li>
                	<li style="list-style: none;"><b>Service and Preparations</b>
                		<ul>
                			<li>Complete chinaware, silverware and glasses</li>
                			<li>Chairs with Seat Cover and ribbon motif</li>
                			<li>Elegant buffet table with spotlight and Centerpiece props with design</li>
                			<li>Candelabra centerpiece on each individual table with candles</li>
                			<li>Rice with free extra 20%</li>
                			<li>Motif Color on decoration</li>
                			<li>Manage Buffet</li>
                			<li>Extra waiters for roving</li>
                			<li>Tarpaulin </li>
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