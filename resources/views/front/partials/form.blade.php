<style type="text/css"> 
#main{ background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center; background-size: cover; } 
#services { background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center; background-size: cover; padding: 40px 0; } 
#about { position: relative; background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center; background-size: cover; padding: 40px 0; }
 .gj-datepicker-md [role=right-icon]{ font-size:36px; }
</style> 
@include('front.partials.accountStyle') 

<main id="main"> 
  <section id="form"> 
    <div class="container"> 
      <header class="section-header wow fadeInUp" style="padding-top: 45px;">
       <h3>Fill Up</h3>
       <p>It’s easy, just fill up the form below with the necessary details</p> 
      </header>

       <!-- test --> 
       
       <form id="msform" action="{{action('FrontController@postCatering')}}" method="post" role="form" > 
       {{csrf_field()}}
        <!-- progressbar --> 
        <ul id="progressbar" style="display:none;">
         <li class="active">Reservation Details</li>
         <li>Reservation Payment</li>
        </ul> <!-- fieldsets -->
         <fieldset> 
         <h2 class="fs-title">Reservation</h2>
          <h3 class="fs-subtitle">Planning & Setting</h3> 
          <label >Food Package</label> 
          <select class="form-control" name="package"> 
          @foreach($package as $package)
           <option value="{{$package->id}}">{{$package->name}} -- {{$package->price}} per head</option>
          @endforeach 
          </select> 
          <label >Event Category</label>
          <select class="form-control" name="category"> 
          @foreach($catering as $catering)
           <option value="{{$catering->id}}">{{$catering->name}}</option>
          @endforeach 
          </select> 
          <label style="display:block;" >Event Venue</label> 
          <select class="form-control" name="venuename" id="select" style="width:47%;display:inline-block;"> 
          @foreach($venue as $venue) 
            <option value="{{$venue->name}}">{{$venue->name}}</option>
          @endforeach 
          </select> 
          <input type="text" id="venue" name="others" class="form-control" placeholder="(optional)" style="width:40%;display:inline-block;padding:8px 10px"> 
          <button class="add-button" id="add" type="button">Add</button> 
          <label >Event Schedule</label> 
          <input type="text" id="datepicker" name="schedule" class="form-control" style="padding:10px;" readonly/>
          <label >Number of Pax :</label> 
          <input type="number" class="form-control" name="people" id="people" required="true" /> 
          @if (Auth::guard('customer')->guest())
                @else
                <div class="g-recaptcha text-center" data-sitekey="6LdhPIEUAAAAAN3qHnV06dwg_INJOBAb_wb3trjU"></div>
                @endif
          <input type="button" name="next" class="next action-button" value="Next" /> 
          </fieldset> 

            <fieldset> 
            <h2 class="fs-title">Payment</h2> 
            <h3 class="fs-subtitle">Reservation Fee</h3> 
           <div id="paypal-button" style="margin:0 auto;"></div>
              <!-- paypal -->
              
              <script>
                paypal.Button.render({
                  // Configure environment
                  env: 'sandbox',
                  client: {
                    sandbox: 'AWbHet5U6VqpDjQ37uksQ7CFs7VlLfu6Hto088Mmf1xO_LOgRbnJhagtXmUjr1FYa5dDjDJlSucsa3Qi',
                    production: 'demo_production_client_id'
                  },
                  // Customize button (optional)
                  locale: 'en_US',
                  style: {
                    size: 'medium',
                    color: 'gold',
                    shape: 'pill',
                  },
              
                  // Enable Pay Now checkout flow (optional)
                  commit: true,
              
                  // Set up a payment
                  payment: function(data, actions) {
                    return actions.payment.create({
                        redirect_urls:{
                          return_url:'http://localhost:8000/execute-payment'
                        },
                      transactions: [{
                        amount: {
                          total: '5000',
                          currency: 'PHP'
                        }
                      }]
                    });
                  },
                  // Execute the payment
                  onAuthorize: function(data, actions) {
                    return actions.redirect();
                    // return actions.payment.execute().then(function() {
                      // Show a confirmation message to the buyer
                      // window.alert('Thankyou For Paying Reservation Fee!');
                    // });
                  }
                }, '#paypal-button');
              
              </script>
              <!-- /paypal -->
            <input type="button" name="previous" class="previous action-button" value="Previous" /> 
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset> 
         </form> <!-- /test -->
      </div> 
    </section><!-- #form -->
    
     <div class="col-md-8" style="margin: 0 auto;background: #fff;border-radius: 8px;color: #000;">{!! $calendar_details->calendar() !!}</div>
      @include('front.partials.section')
</main>