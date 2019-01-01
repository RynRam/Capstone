<style>

</style>
<div style="padding:20px;background:#330101;color:#e5e5e5;" >
<h3>Hooray Customer!</h3>
<h6> <div style="position:absolute;bottom:0;left:0%;">Created_at :<?php date_default_timezone_set('Asia/Manila');
echo date('F j, Y g:i a'); ?>
</h6>
<h1 class="center text-center">Welcome to Lynagail's Catering</h1>
<img src="http://cavite.info/custom/domain_1/image_files/photo_379.jpg" alt="" style="width:auto;">
<br>
<h3>To verify your account kindly <a href="{{route('sendEmailDone',['email' => $customer->email,'verification_token'=>$customer->verification_token])}}" style="text-align:center;padding:10px;background:#18d36e;">Click Here</a></h3>
</div>