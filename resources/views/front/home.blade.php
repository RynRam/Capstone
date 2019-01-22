@extends('layouts.frontLayout.front_design')

@section('content')

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('images/frontend_images/cards/corporate.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Lynagails Catering Services</h2>
                <p>Welcome to Lynagail's Catering we make sure of high-quality food is our specialty and organizing events.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('images/frontend_images/cards/post1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Basic Caterings</h2>
                <p>we package each event to come up with an above satisfying, worry free party with a budget you can afford.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('images/frontend_images/cards/wedding.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Debuts</h2>
                <p>The debut is a traditional Filipino coming-of-age celebration which celebrates a young woman's 18th birthday, the age of maturity in the Philippines. Although also reaching legal maturity at 18, a Filipino man may mark his own debut on his 21st birthday, albeit with less formal celebrations or none at all.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('images/frontend_images/cards/post2.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Weddings</h2>
                <p>A wedding is a ceremony where two people are united in marriage.Special wedding garments are often worn, and the ceremony is sometimes followed by a wedding reception. Music, poetry, prayers or readings from religious texts or literature are also commonly incorporated into the ceremony.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('images/frontend_images/cards/6.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Christenings</h2>
                <p>Christenings are a very special occasion being that it celebrates a significant rite of passage and serves as the first formal introduction of a new baby.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!-- credits to chilli con code -->
<style type="text/css">
    #featured-services .colour-block {
      background:#369A7E;
      width:100%;
      padding:7% 10% 10% 10%;
      color:#fff;
    }

    #featured-services p {
      font-size:20px;
      font-family:'Raleway', serif;
    }
    #featured-services .container {
      width:100%;    }
    #featured-services .scallop-down{
      height:35px;
      width:100%;
      background: -webkit-gradient(radial, 50% 0, 10, 50% 0, 40, from(#369A7E), color-stop(0.49, #369A7E), color-stop(0.51, rgba(0,0,0,0)), to(rgba(0,0,0,0)));
    -webkit-background-size: 49px 100%;
    }
    #featured-services .scallop-up{
      height:35px;
      width:100%;
      background: -webkit-gradient(radial, 50% 100%, 10, 50% 100%, 40, from(#369A7E), color-stop(0.49, #369A7E), color-stop(0.51, rgba(0,0,0,0)), to(rgba(0,0,0,0)));
    -webkit-background-size: 49px 100%;
    }
    </style>
 <!-- Featured Services -->
    <section id="featured-services" >
      <div class="container">
        <header class="section-header">
          <h3>Discounts & Promotions</h3>
        </header>
        <div class="row">

        <div class="scallop-up"></div>
        <div class="colour-block">
          @foreach($discounts as $discount)
          <h4><b><u>{{$discount->name}}</u></b></h4>
          <h5>{{$discount->description}}</h5>
     
          @endforeach
        </div>
        <div class="scallop-down"></div>

        </div>
      </div>
    </section><!-- #featured-services -->
<!-- /credits to chilli con code -->

<!-- services section -->

    <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
           <p></p>
        </header>
        <div class="row services-container">

          <div class="col-lg-4 col-md-6 services-item filter-card wow fadeInUp">
            <div class="services-wrap">
              <figure>
                <img src="{{asset('images/frontend_images/cards/onie.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('images/frontend_images/cards/onie.jpg')}}" class="link-preview" data-lightbox="services" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{url('/basic-catering')}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="services-info">
                <h4><a href="{{url('/basic-catering')}}">Basic Catering</a></h4>
                <p>Details</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 services-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="services-wrap">
              <figure>
                <img src="{{asset('images/frontend_images/cards/9.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('images/frontend_images/cards/9.jpg')}}" class="link-preview" data-lightbox="services" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{url('/debut')}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="services-info">
                <h4><a href="{{url('/debut')}}">Debut</a></h4>
                <p>Details</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 services-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="services-wrap">
              <figure>
                <img src="{{asset('images/frontend_images/cards/weddingfirst.jpg')}}" class="img-fluid" alt="">
                <a href="{{asset('images/frontend_images/cards/weddingfirst.jpg')}}" class="link-preview" data-lightbox="services" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{url('/basic-catering')}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="services-info">
                <h4><a href="{{url('/basic-catering')}}">Wedding</a></h4>
                <p>Details</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
<!-- skill section -->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Why Us</h3>
           <p></p>
          <img src="{{asset('images/frontend_images/home/whyusV2.png')}}" alt="" width="100%">
        </header>

        <div class="skills-content">
  

        </div>

      </div>
    </section>
    <!-- about section -->
    <section id="about" >
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
               Lynagail’s catering aims to become the top catering service provider in the region of cavite and one day, to become an international class catering service as well as become one of the most trusted banquet service provider in the country
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Lynagail’s catering aims to become the top catering service provider in the region of cavite and one day, to become an international class catering service as well as become one of the most trusted banquet service provider in the country
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Lynagail’s catering aims to become the top catering service provider in the region of cavite and one day, to become an international class catering service as well as become one of the most trusted banquet service provider in the country
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <section id="feedbacks" class="section-bg ">
      <div class="container">

        <header class="section-header">
          <h3>Feedbacks</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <h3>Abbi Gail</h3>
            <h4>Client</h4>
            <p>
              
              If you want to have the best food, decoration/design, crew, & service for your event at a very affordable price, then Lyngails is the best catering service for you...This is my 2nd event with Lynagails... Thank you Ricci for accommodating me 2 weeks before my daughter's bday and giving my requests on a last minute basis...thank you for recommending suppliers as well like my host... Your crew, decorations, and food is really the best! Till the next event!
            
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3>Rannie-Michelle Escalada</h3>
            <h4>Client</h4>
            <p>
              We had a rush booking(less than 3 weeks before the event) for my child's baptism but still Richie was very helpful and accomodating. The food was delicious and the guests loved them. I can tell because no one have any leftovers on their plate. Seafood galore, roastbeef and rolled pork with pineapple were my favorite. Staff were diligent and courteous. Thank you richie and lynagails for the great service.
            </p>
          </div>
          <div class="testimonial-item">
           
            <h3>Norvin Lorenz Dolorfino</h3>
            <h4>Client</h4>
            <p>
             Thank you sir richard and your crew for your very good service and delicious foods for the Baptism of my son yesterday (Dec. 19, '17). Such a good experience working with your team, very recommended specially on your food.
            </p>
          </div>
          <div class="testimonial-item">

            <h3>Julie Ann Lao</h3>
            <h4>Client</h4>
            <p>
              Had the pleasure of working with Sir Richard for a company event last year. I would highly recommend him to all your catering needs as he & his team are very professional, food package is very affordable, with a wide variety of food choices, food portions are more than the usual (in short di ka mabibitin) and sumptuous. and the event set-up is very elegant. Recently, referred him to our sister company who had foreign visitors and as expected, they are all very satisfied with all of the services that one will be looking for in a caterer.
            </p>
          </div>
          <div class="testimonial-item">
            <h3>Annie Palacio</h3>
            <h4>Client</h4>
            <p>
              Thank you sir Ricci and to all of your staff . Excelent service !! Its my second time to work with Lynagails as my client chosen caterer for their wedding event . Very detailed and very concern from set up , food , time management , flowers, everything. Well organized. The food was great. Highly recommended

            </p>
          </div>

        </div>

      </div>
    </section><!-- #feedback -->
  <!-- contact -->
    <section id="contact" class="section-bg ">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>254 M. Gregorio St. cor Reynoso St San Antonio Cavite City Cavite City, Philippines 4100 </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p>0927 999 2081</p><br/>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p>Lynagailscater@gmail.com</p><br/>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>


 @endsection