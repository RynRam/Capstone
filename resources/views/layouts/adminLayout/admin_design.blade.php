<!DOCTYPE html>
<html lang="en">
<head>
<title>Lynagails Catering</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="../../images/title.png" rel="icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.css" />
<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/matrix-style.css" />
<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/matrix-media.css" />
<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/lib/lightbox/css/lightbox.min.css" />
<link href="https://lynagailscaters.herokuapp.com/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome.css" rel="stylesheet">
<link href="https://lynagailscaters.herokuapp.com/css/backend_css/uniform.css" rel="stylesheet" />
<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/select2.css" />
<link rel="stylesheet" href="https://lynagailscaters.herokuapp.com/css/backend_css/bootstrap-wysihtml5.css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>



</head>
<body>


 @include('layouts/adminLayout/admin_header')

 @include('layouts/adminLayout/admin_sidebar')

 @yield('content')


 


<script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.min.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.ui.custom.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/matrix.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.validate.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/matrix.form_validation.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.uniform.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/select2.min.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/jquery.dataTables.min.js"></script> 
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/matrix.tables.js"></script>
 <script src="https://lynagailscaters.herokuapp.com/lib/lightbox/js/lightbox.min.js"></script>
 <script src="https://lynagailscaters.herokuapp.com/js/backend_js/wysihtml5-0.3.0.js"></script>
<script src="https://lynagailscaters.herokuapp.com/js/backend_js/bootstrap-wysihtml5.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $('.textarea_editor').wysihtml5();
</script>

<script>
$(function(){
  $('#msform').submit(function(e) {
 
    var venue = $("select#select").find(':selected').data('capacity');
    var pax = $('#people').val();
   
      if (venue < pax) {
        swal("The pax exceeds the venue limit", "", "error");
     return false;
      }


  });
});

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

<!-- show price -->
<!-- <script>

$(function(){
   $('#showPrice').submit(function(e) {
     var from = $('#salesfrom').val();
     var to = $('#salesto').val();
    //  var package = $('#package').val();
   
    if()
   });

 });
 


</script> -->


<script>
   $('#submit').submit(function(e) {
     var from = $('#salesfrom').val();
     var to = $('#salesto').val();
	 var category = $('#category').val();

	 var $markup = "";
     var reserved =$.ajax({
                dataType: "json",
                url: "/admin/salesreport",
                data: {category: category,  from: from, to: to },
                type: 'GET',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    console.log(data.length);
                    
               
                    for (var i = 0; i < data.length; i++) {

                        $markup += "<tr class="gradeX">" +
                    ]
                            "<td>" + data[i].id +"</td>" +
                            "<td>" + data[i].category + "</td>" +
                            "<td>" + data[i].amount_payment + "</td>" +
                            "<td>" + data[i].balance +"</td>"+
                            "<td>" + date('m-d-y',strtotime(data[i].date_invoicee)) +"</td>"+
                        
                    "</tr>";
                    }
                    $("#tablebody").html($markup);
                }
            });


 });
 
 </script>



</body>
</html>
