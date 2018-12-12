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
        <h1 style="text-align:center;"><i><u>Reservation 1 Report</u></i></h1>
    <table width="100%" style="border-collapse:collapse; border:0px">
      <thead>
        <tr><div style="position:absolute;bottom:0;right:0%;">Printed By : __________________</div>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">First Name</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Last Name</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Assign</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Date Added</th>
          <th style="border: 1px solid; padding:12px; background-color:#5bb75b;" width="20%">Date Updated</th>
        </tr>
      </thead>
      <tbody>
      @foreach($assign1 as $assign)          
          <tr class="gradeX">

        <td style="border:1px solid; padding:12px;">{{$assign->firstname}}</td>
        <td style="border:1px solid; padding:12px;">{{$assign->lastname}}</td>
        <td style="border:1px solid; padding:12px;">{{$assign->is_assign}}</td>
        <td style="border:1px solid; padding:12px;">{{$assign->created_at}}</td>
        <td style="border:1px solid; padding:12px;">{{$assign->updated_at}}</td>

        </tr>
        @endforeach
      </tbody>
      </table>
 </div>
 <div style="position:absolute;bottom:0;left:0%;">Date Printed :<?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>
</html>
     
