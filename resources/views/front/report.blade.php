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
        <hr style="height: 5px; width: 150%;">
        
        <b>Dear Customer:</b>
        <p>Thank you for choosing Lynagails Catering Services. Its our pleasure to confirm your reservation as follows.</p>
      <!-- <h1 style="text-align:center;"><i><u>Reservation Receipt</u></i></h1> -->
  
      <table width="100%" style="border-collapse:collapse; border:0px">
      <tbody>
        <tr>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="100%" colspan="2">RESERVATION DETAILS:</th>
        </tr>
        <tr class="gradeX">
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">Reservation ID:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->id}}</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Venue:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->venue->name}}</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Package</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->package->name}} </td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Event Date:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->eventdate}}</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Category</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->category->name}}  </td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Guest</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->guest}} pax </td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Total Amount</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->total}} Pesos </td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Reservation Status</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->is_approved == 0 ? 'Pending' : 'Approved'}} </td>
        </tr>
        <tr>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="100%" colspan="2">CUSTOMER DETAILS:</th>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Account Name:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->customer->fname}} {{$reservation->customer->lname}}</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Account Contact:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->customer->contact}}</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Account Email:</td>
        <td style="border:1px solid; padding:12px;">{{$reservation->customer->address}} </td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Account Address:</td>
        <td style="border:1px solid; padding:12px;"> {{$reservation->customer->email}} }</td>
        </tr>
        <tr>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="100%" colspan="2">CANCELLATION POLICY:</th>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Guarantee Method:</td>
        <td style="border:1px solid; padding:12px;"> Bank Transfer/ Cash Deposit</td>
        </tr>
        <tr>
        <td style="border: 1px solid; padding:12px; background-color:#B75BB7;" width="20%">>Cancellation:</td>
        <td style="border:1px solid; padding:12px;"> Reservation fee is 20% based on contact price will be collected upon signing of the contract of agreement and refundable in 1 Month(31days) before the event. But less of 50% of the reservation on Before two months of the event</td>
        </tr>
        
      </tbody>
      </table>
      <hr style="height: 5px; width: 150%;">
        
        <b>Thanks and Regards,</b>
        <p><b>Reservation Executive </b><p>
         <p>Mr. Richard Co</p>
 <div style="position:absolute;bottom:0;right:0%;">Prepared By : __________________</div>
 <div style="position:absolute;bottom:0;left:0%;">Date & Time : <?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>

</body>
</html>
     
