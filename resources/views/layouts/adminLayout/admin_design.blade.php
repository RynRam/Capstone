<!DOCTYPE html>
<html lang="en">
<head>
<title>Lynagails Catering</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="{{asset('images/title.png')}}" rel="icon">
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
<link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/backend_css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/select2.css')}}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-wysihtml5.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>



</head>
<body>


 @include('layouts/adminLayout/admin_header')

 @include('layouts/adminLayout/admin_sidebar')

 @yield('content')





<script src="{{ asset('js/backend_js/jquery.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js')}}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script>
 <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
 <script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js')}}"></script>
<script src="{{ asset('js/backend_js/knockout.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script>
  $('.textarea_editor').wysihtml5();
</script>

<script>

$(function() {

    $('#price').on('change', function(){
    		var changed = this;

    		console.log(changed);

  			var total = parseFloat($('#totalhidden').val());

  			var terms = parseFloat($('input[name=terms]:checked').val());

  			var equiv = terms * total;

  			var price = parseFloat(changed.value);
  

	  		$('#change').val(price - equiv);

  	});

  	    $('input[name=terms]').on('click', function(){
    		var changed = this;

    		var price = $("#price").val();
    		console.log(price);
    		var total = parseFloat($('#totalhidden').val());
    		var terms = parseFloat(changed.value);

    		var equiv = terms * total;
    		$('#balance').val(equiv);
    		

  	});
});

 
</script>


</body>
</html>
