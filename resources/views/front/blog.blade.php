@extends('layouts.frontLayout.front_custom1')
@section('content')
 <style type="text/css">
 	ul li{
 		color: #000;
 		font-weight: 500;
 		font-family: "Montserrat", sans-serif;
 		list-style: none;
 	}
    ul li i{
    color: #fff !important;
    font-weight: 500;
    font-size: 18px !important;
  }
  ul li img{
    position: relative;
    width: 100%;
    object-fit: cover;
    padding-right: 50px;
    height: 200px;
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
          <h3>Blogs</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-12 wow fadeInUp data-wow-delay="0.1s"">
            <div class="about-col">
              <div class="img">
                <img src="#" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-book-outline"></i></div>
              </div>
              <h2></h2>
              <p>
                <ul>
                	@foreach($posts as $post)
                	<li style="list-style: none;font-size: 23px;"><u><b>{{$post->title}}</b></u>
                   <li style="font-size: 17px;">Written by <i style="color:#000 !important;"> {{$post->author}} </i>| {{$post->created_at->diffForHumans() }} </li>
                		<ul>

                			<li style="font-size: 17px;"><i style="color:#000 !important;">"{{$post->info}}"</i></li>
                		</ul>
                     <li><img src="../../images/{{$post->file}}"></li>
                	</li>
                	@endforeach
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
     
</main>
 @endsection