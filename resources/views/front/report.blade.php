<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<body>
 <div class="widget-content nopadding">
    <img src="{{ public_path('images/logoprime.jpg') }}" alt="" style="position:absolute;top: -15px;left:-35px;" width="250px;">

       <h4 style="text-align:center; width:240px; margin:0 auto;">254 M. Gregorio St. cor Reynoso St San Antonio Cavite City Cavite City, Philippines 4100</h4>
        <h5 style="text-align:center;">TIN No. :000-000-549-000</h5>
        <div  style="position:absolute;top:14%;left:0;">  
      <h1 style="text-align:center;"><i><u>Reservation Receipt</u></i></h1>
  
      <div class="text-left">
        <b> ID no :</b> <u style="font-size:23px;">{{$reservation->id}} </u><br/>
        <b>  Account name :</b> <u style="font-size:23px;">{{$reservation->customer->fname}} {{$reservation->customer->lname}} </u><br/>
        <b>  Contact No :</b> <u style="font-size:23px;">{{$reservation->customer->contact}} </u><br/>
        <b>  Address :</b> <u style="font-size:23px;">{{$reservation->customer->address}} </u><br/>
        <b> Email Account :</b><u style="font-size:23px;"> {{$reservation->customer->email}} </u><br/><br/><br/>
        <b> Venue :</b> <u style="font-size:23px;">{{$reservation->venue->name}} </u><br/><br/>
        <b> Package :</b> <u style="font-size:23px;">{{$reservation->package->name}} </u><br/><br/>
        <b> Event Date :</b> <u style="font-size:23px;">{{$reservation->eventdate}} </u><br/><br/>
        <b> Category :</b> <u style="font-size:23px;">{{$reservation->category->name}} </u><br/><br/>
        <b> Guest :</b> <u style="font-size:23px;">{{$reservation->guest}} pax </u><br/><br/>
        <b> Total Amount :</b> <u style="font-size:23px;">{{$reservation->total}} Peso </u><br/><br/>
        <b> Status :</b> <u style="font-size:23px;">{{$reservation->is_approved == 0 ? 'Pending' : 'Approved'}} </u><br/>
      </div>
 <div style="position:absolute;bottom:0;right:0%;">Prepared By : __________________</div>
 <div style="position:absolute;bottom:0;left:0%;">Date & Time : <?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>

</body>
</html>
     
