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
        <h1 style="text-align:center;"><i><u>Sales Report</u></i></h1>
        <table width="100%" style="border-collapse:collapse; border:0px" >
      <thead>
        <tr>
        <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Customer</th>
        <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Event</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Description</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Date</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Sales Amount</th>
         



        </tr>
      </thead>
      <tbody>
      @foreach($sales as $sale)   
          <tr class="gradeX">
          <td style="border:1px solid; padding:12px;">{{$sale->reservation->customer->fname}} {{$sale->reservation->customer->lname}}</td>
          <td style="border:1px solid; padding:12px;">{{$sale->reservation->category->name}}</td>
        <td style="border:1px solid; padding:12px;">{{$sale->reservation->package->name}}</td>
        <td style="border:1px solid; padding:12px;">{{date('M/d/Y', strtotime($sale->date_invoice))}}</td>
        <td style="border:1px solid; padding:12px;">PHP {{$sale->balance}}</td>
      @endforeach 
        <h2 style=text-align:right;"><b>Total Sales: <u> PHP {{$amount}} </u></b></h2>
<div style="position:absolute;bottom:0;right:0%;">Prepared By : __________________</div>
        </tr>
  
      </tbody>
      </table>
    
 </div>
 <div style="position:absolute;bottom:0;left:0%;">Date & Time :<?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>
 
</body>
</html>
     
