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
        <h1 style="text-align:center;"><i><u>Package Reports</u></i></h1>
    <table width="100%" style="border-collapse:collapse; border:0px">
      <thead>
        <tr>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="10%">ID</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Package</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="30%">Inclusion</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Price</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="15%">Date Added</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="15%">Date Updated</th>

        </tr>
      </thead>
      <tbody>
      @foreach($foods as $food)          
          <tr class="gradeX">
        <td style="border:1px solid; padding:12px;">{{$food->id}}</td>
        <td style="border:1px solid; padding:12px;">{{ucfirst($food->name)}}</td>
        <td style="border:1px solid; padding:12px;">{{ucfirst($food->inclusion)}}</td>
        <td style="border:1px solid; padding:12px;">{{$food->price}}</td>
        <td style="border:1px solid; padding:12px;">{{$food->created_at}}</td>
        <td style="border:1px solid; padding:12px;">{{$food->updated_at}}</td>

        </tr>
        @endforeach
      </tbody>
      </table>
      <div style="position:absolute;bottom:0;right:0%;">Prepared By : __________________</div>
 </div>
 <div style="position:absolute;bottom:0;left:0%;">Date & Time :<?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>
</body>
</html>
     
