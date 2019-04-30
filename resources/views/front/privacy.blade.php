@extends('layouts.frontLayout.front_custom1')
@section('content')
 <style type="text/css">
 	ul li{
 		color: #000;
 		font-weight: 500;
 		font-family: "Montserrat", sans-serif;
	    padding: 10px 25px 0 0;
	    text-align: justify;
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
          <h3>Private Policy</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp data-wow-delay="0.1s"">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-book-outline"></i></div>
              </div>
              <p>
              	<ul>
              		<li style="list-style: none;">Here at Lynagail’s Catering Business, we protect all our client’s privacy, credentials and have the following policy implemented with regards to your private information.</li>

              		<li style="list-style: none;"><b>Here at Lynagail’s Catering Business, we protect all our client’s privacy, credentials and have the following policy implemented with regards to your private information.</b></li>
              		<ul>
              			<li>1.	Information about your track record and activities in this website</li>
              			<li>2.	Information about any transaction held out between the client and our website or in relation to our business</li>
              			<li>3.	Private information such as the client’s whole name, birthdate, personal preferences and contact information in connection with the purpose of registering and inquiring our website</li>
              			<li>4.	Other unspecified information a client would be willing to provide us or choose to share to us.</li>
              		</ul>
                  <li style="list-style: none;">Every information gathered and stored is used for the purpose of understand the needs of the client which enables our business to provide better service that can accommodate the client’s wants and needs.</li>

                  <li style="list-style: none;"><b>Stated below are other purposes of storing those information:</b></li>
                  <ul>
                    <li>1.	Internal record keeping</li>
                    <li>2.	Improving our services</li>
                    <li>3.	Keeping you updated and posted with our new services offered</li>
                    <li>4.	Market Research purposes</li>
                    <li>5.	Security and Integrity</li>
                  </ul>
                  <li style="list-style: none;">We are fully committed in ensuring the security of the information you provide to us, appropriate and reliable measure are in operation to safeguard and imply proper safety protocols to guard the information we collect and store. </li>
                  <li style="list-style: none;"><b>How our website use cookies.</b></li>
                  <li style="list-style: none;">How our website use cookies.
                  Cookies are small files which asks your permission if you do or do not agree on placing it in your computer’s hard drive, once you agree, the file is then added to your computer’s hard drive which helps analyze and operate web traffic and even notifies you when u visited that particular site already. Cookies allow web applications to respond to you directly as an individual, which results to the web application to tailor its operations to your need and comfort by gathering and analyzing remembered information. 
                  Our website use traffic log cookies to pin point web pages that are being used or is already used. This then helps us analyze different data about web page traffic and improve our website in order to tailor it to the customer’s desire. The overall help of cookies is it provides you with a better website by enabling us to sort out which web pages are useful for you or is not. 
                  No way a cookie can give us access to your computer, manipulate data in your hard disk or any information about you other than those you shared to us. 

                  You have the total power in accepting cookie storing or declining it. Most web browsers automatically accept cookies but the user can always modify the browser’s setting to decline the entry of cookies if they prefer to do so. By doing so, the user prevents the taking of the full advantage over the website. 

                  Our website contains links to other websites of interest. However, once the client have used this links to leave our website, be advised that our business have no control over that website. Therefore, we cannot be held responsible for the security and privacy of any information the user provide or share whilst visiting and accessing such websites and are not included in this privacy statement and policy.

                  One should exercise caution in venturing other websites and is advised to view their privacy policies for safety purposes.

                  Controlling and Manipulating your Personal Information

                  Clients can choose to restrict the retrieval or control over their personal information at any time by writing to or emailing us at ---------------------@gmail.com.
                  You may also opt-out of our database anytime the client desires by following the same process.
                  If you believe that any information we stored is unjustified or incomplete, please do write to or email us as quickly as possible at the address above. We will promptly correct any information found to be falst. 
                  Updated by Lynagail’s Catering Business February 15, 2019
                </li>
              	</ul>
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #about -->
</main>
@include('front.partials.section')
 @endsection