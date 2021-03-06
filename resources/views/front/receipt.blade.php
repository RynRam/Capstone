@extends('layouts.frontLayout.front_custom1')
@section('content')
@include('front.partials.accountStyle')



<main id="main">
  	  <section id="form">
        <div class="container">
          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3 style="color:#fff;">Receipt Form</h3>
            
          </header>         
            <form id="msform" role="form" >

                <fieldset>
                  <h2 class="fs-title">Official Receipt</h2>
                
                  <h3 class="fs-subtitle">  
                  LYNAGAILS CATERING SERVICES <br/>
                  254 M. Gregorio St. cor Reynoso St San Antonio Cavite City Cavite City, Philippines 4100  <br/>
                  TIN No. :000-000-549-000 <br/>
                  Date & Time: <?php date_default_timezone_set('Asia/Manila'); echo date('F j, Y g:i a'); ?><br/>
                   </h3>
                   <div class="text-left">
                   <b> ID no :</b> <u style="font-size:100%;">{{$reservation->id}} </u><br/>
                   <b>  Account name :</b> <u style="font-size:100%;">{{$reservation->customer->fname}} {{$reservation->customer->lname}} </u><br/>
                   <b> Email Account :</b><u style="font-size:100%;"> {{$reservation->customer->email}} </u><br/>
                   <b> Venue :</b> <u style="font-size:100%;">{{$reservation->venue->name}} </u><br/>
                   <b> Package :</b> <u style="font-size:100%;">{{$reservation->package->name}} </u><br/>
                   <b> Event Date :</b> <u style="font-size:100%;">{{$reservation->eventdate}} </u><br/>
                   <b> Category :</b> <u style="font-size:100%;">{{$reservation->category->name}} </u><br/>
                   <b> Guest :</b> <u style="font-size:100%;">{{$reservation->guest}} </u><br/>
                   <b> Total Amount :</b> <u style="font-size:100%;">{{$reservation->total}} </u><br/>
                   <b> Status :</b> <u style="font-size:100%;">{{$reservation->is_approved == 0 ? 'Pending' : 'Approved'}} </u><br/>
                   </div>
                   <a href="/"><input type="button" class="submit action-button" value="Back to home" /></a>
                   <a href="/receipt/report"><input type="button" class="submit action-button" value="Print" /></a>




              </fieldset>
             </form>
          
        </div>
	    </section><!-- #form -->

  </main>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
@if (session('alert'))
    swal("{{ session('alert') }}","","success");
@endif
</script>



@endsection