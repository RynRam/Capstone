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
      <h1 style="text-align:center;"><i><u>Payment Receipt</u></i></h1>
      <b>Customer: </b> {{$payments->reservation->fname}} {{$payments->reservation->lname}}<b style="float:right;">Invoice Date: <u>{{date('m-d-y',strtotime($payments->date_invoice)) }}</u></b> 
    <br/><p style="margin-left: 81px;margin-top: 2px;margin-bottom: 1px;">{{$payments->reservation->email}}</p>
    <p style="margin-left: 81px;margin-top: 2px;margin-bottom: 2px;">{{$payments->reservation->contact}}</p>
    <p style="margin-left: 81px;margin-top: 2px;margin-bottom: 2px;">{{$payments->reservation->address}}</p>
    <br>
    <b>Payment Method: CASH</b>
    </div>
  
    <table width="100%" style="position:absolute;top:40%;left:0;">
      <tr>
        <th style="border-top:none;background-color: #18d26e;">Package</th>
        <th style="border-top:none;background-color: #18d26e;">Package Price</th>
        <th style="border-top:none;background-color: #18d26e;">Guest</th>
        <th style="border-top:none;background-color: #18d26e;">Downpayment</th>
        <th style="border-top:none;background-color: #18d26e;">Total</th>
   
      </tr>
      <tr>
        <td style="background-color: #e5e5e5;">{{$payments->reservation->package->name}}</td>
        <td style="background-color: #e5e5e5;">{{$payments->reservation->package->price}}</td>
        <td style="background-color: #e5e5e5;">{{$payments->reservation->guest}}</td>
        <td style="background-color: #e5e5e5;">{{$payments->percentage}}</td>
        <td style="background-color: #e5e5e5;">{{$payments->reservation->total}}</td>
      </tr>
    </table>
    <hr width="200px" style="color:#000;position: absolute;top:50%;right: 0;">
    <h4 style="position: absolute;right:12%;top:50%;">Total * {{$payments->percentage}} :</h4>
     <h4 style="position: absolute;right:12%;top:53%;">Amount Tender: </h4>
     <p style="position: absolute;right:2%;top:482px;">{{$payments->balance}}</p>
<p style="position: absolute;right:2%;top:508px;">{{$payments->amount_payment}}</p>
    <hr width="200px" style="color:#000;position: absolute;top:58%;right: 0;">
     <h4 style="position: absolute;right:12%;top:59%;">Change: </h4>
      <p style="position: absolute;right:2%;top:567px;">{{$payments->change}}</p>
 </div>
 <div style="position:absolute;bottom:0;right:0%;">Printed By : __________________</div>
 <div style="position:absolute;bottom:0;left:0%;">Date Printed :<?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>

</body>
</html>
     
