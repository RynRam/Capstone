@extends('layouts.frontLayout.front_custom')

@section('content')
<style>
	#call-to-action {
  background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center;
  background-size: cover;
	    padding: 14% 0%;
	}
  #call-to-action h3{
      color: #fff;
      font-size: 400%;
      font-weight: 100;
  }
</style>
   <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Basic Caterings</h3>
          <p>we package each event to come up with an above satisfying, worry free party with a budget you can afford.</p>
      </div>
    </section><!-- #call-to-action -->


@include('front.partials.form')

 @endsection