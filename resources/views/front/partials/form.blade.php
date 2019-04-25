<style type="text/css"> 
#main{ background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center; background-size: cover; } 
#services { background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center; background-size: cover; padding: 40px 0; } 
#about { position: relative; background: linear-gradient(rgba(21, 2, 2, 0.7), rgba(21, 2, 2, 0.7)), url(../../images/backend_images/Blog3.jpg) fixed center center; background-size: cover; padding: 40px 0; }
 .gj-datepicker-md [role=right-icon]{ font-size:36px; }
</style> 
@include('front.partials.accountStyle') 

<main id="main"> 
  <section id="form"> 
    <div class="container"> 
      <header class="section-header" style="padding-top: 45px;">
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
          <input type="hidden" name="customer" value="{{ Auth::guard('customer')->user()->id  ?? ''}}">
          <label >Food Package</label> 
          <select class="form-control" name="package" id="package"> 
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
          <select class="form-control" name="venuename" id="select" style="display:inline-block;"> 
          @foreach($venue as $venue) 
            <option data-capacity="{{$venue->capacity}}" value="{{$venue->id}}">{{$venue->name}}-({{$venue->capacity}} max capacity)</option>
          @endforeach 
          </select> 
          <!-- <input type="text" id="venue" name="others" class="form-control" placeholder="(optional)" style="width:40%;display:inline-block;padding:8px 10px"> 
          <button class="add-button" id="add" type="button">Add</button>  -->
          <label >Event Schedule</label> 
          <input type="text" id="datepicker" name="schedule" class="form-control" style="padding:10px;" readonly/>
          <label >Number of Pax :</label> 
          <input type="number" class="form-control" name="people" id="people" required="true" /> 
          @if (Auth::guard('customer')->guest())
          <a href="/customer-login"><input type="button" name="next" class="next action-button" value="Next" /></a>
                @else
                <div class="g-recaptcha text-center" data-sitekey="6LdhPIEUAAAAAN3qHnV06dwg_INJOBAb_wb3trjU" style="transform:scale(0.70);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                <input type="button" name="next" class="next action-button" value="Next" id="showPrice"/> 
                @endif
         
          </fieldset> 

            <fieldset> 
            <h2 class="fs-title">Payment</h2>             
            <h3 class="fs-subtitle">Reservation Fee</h3> 
            <div class="form-group">
            <label for="venue_price" class="col-form-label">Venue Price:</label>
            <input type="number" class="form-control" id="venue_price" name="venue_price"  readonly> 
            <label for="package_price" class="col-form-label">(Package Price x No. of Pax):</label>
            <input type="number" class="form-control" id="package_price" name="package_price"  readonly> 
            <label for="total_price" class="col-form-label">Total Amount:</label>
            <input type="number" class="form-control" id="total_price" name="total_price"  readonly> 
            </div>
            <div><input type="submit" name="submitCater" value="Paypal Pay Now" class="action-button submit" style="background:#0070ba;width:200px;"></div>
            <div><input type="checkbox" name="checkbox" value="check" id="agree"  style="width:auto;"/> I have read and agree to the <u><a onclick="window.open('https://lynagailscaters.herokuapp.com/terms&condition')">Terms and Conditions and Privacy Policy</a></u></div>
            <input type="button" name="previous" class="previous action-button" value="Previous" /> 
            
            </fieldset> 
         </form> <!-- /test -->
      </div> 
    </section><!-- #form -->
    
     <div class="col-md-8" style="margin: 0 auto;background: #fff;border-radius: 8px;color: #000;">{!! $calendar_details->calendar() !!}</div>
      @include('front.partials.section')
</main>
