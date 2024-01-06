<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_heading; ?></title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<?php 
include "admin_header_lite.php"; 
include "side_bar.php"; 
include "navigation.php"; 
?>
<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?php echo $page_heading; ?></h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active"><?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Basic Information</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<form action="<?= route_to('create.service'); ?>" method="post" id="create-service" autocomplete="off" class="">
<div class="input-group">
<div class="form-group col-md-6">
<label for="inputName">Service Name</label>
<input type="text" id="service_name" name="service_name" class="form-control">
</div>
<div class="form-group col-md-6">
<label for="parent_service">Parent Service</label>
<select id="parent_service" name="parent_service" class="form-control custom-select">
<option selected >None</option>
<?php  

	foreach ($services as $key => $service) {
		echo '<option value='.$service->service_name.'>'.$service->service_name.'</option>';
	}

?>
</select>
</div>
</div>
<div class="input-group">
<div class="form-group col-md-6">
<label for="service_type">Service Type</label>
<select id="service_type" name="service_type" class="form-control custom-select">
<option selected disabled>Select one</option>
<?php  

	foreach ($service_categories as $key => $cat) {
		echo '<option value='.$cat->category.'>'.$cat->category.'</option>';
	}

?>
</select>
</div>
<div class="form-group col-md-6">
<label for="fee">Base Fee</label>
<input type="text" id="fee" name="fee" class="form-control">
</div>
</div>
<div class="form-group">
<label for="inputDescription">Service Description</label>
<textarea id="desc" name="desc" class="form-control" rows="4"></textarea>
</div>
<div class="input-group">
<div class="form-group col-md-6">
<label for="inputStatus">Status</label>
<select id="status" name="status" class="form-control custom-select">
<option selected disabled>Select one</option>
<option value="Published">Published</option>
<option value="Draft">Draft</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputName">Average Duration (Hrs)</label>
<input type="number" id="avg_duration" name="avg_duration" class="form-control">
</div>
</div>
<div class="form-group">
<label for="inputDescription">Notes</label>
<textarea id="notes" name="notes" class="form-control" rows="4"></textarea>
</div>
</div>

</div>

</div>

</div>
<div class="row">
<div class="col-12" style="padding-bottom: 30px;">
<button id="delete-user" type="button" class="btn btn-info" onclick="location.href='<?php echo base_url("dashboard"); ?>'"><i class="fa fa-arrow-left"></i>  &nbsp;&nbsp;Back</button>
<button id="create-btn" type="submit" class="btn btn-success float-right submitting">Create Service</button>

</div>
</form>
</div>
</section>

</div>

<footer class="main-footer" style="background-color: #000;">
<strong>Copyright &copy; 2023 <a href="javascript:void(0);" style="color:#faef00;">Rooom Mobile Salon</a>.</strong>
All rights reserved. System Designed & Developed By <a href="https://bblack.co.za/" target="_blank" style="color:#faef00;">BrightBlack</a>
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 1.1.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="assets/admin/dist/js/demo.js"></script>

<?php include "admin_footer_lite.php"; ?>

<script>

$(document).ready(function() {
  $('#fee').keypress(function(event) {
	    var charCode = (event.which) ? event.which : event.keyCode

	    if (
	      (charCode != 45 || $(this).val().indexOf('-') != -1) && // “-” CHECK MINUS, AND ONLY ONE.
	      (charCode != 46 || $(this).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
	      (charCode < 48 || charCode > 57))
	      return false;

	    return true;

	  });
	});

$(function () {

  $('#create-service').validate({
    rules: {
      service_name: {
        required: true,
      },
      fee: {
        required: true,
      },
      service_type: {
        required: true,
      },
      status: {
        required: true,
      },
      avg_duration: {
        required: true,
      },

    },
    messages: {
      service_name: {
        required: "Please enter the service name"
      },
      fee: {
        required: "Please enter the service fee"
      },
      service_type: {
        required: "Please select the service type"
      },
      status: {
        required: "Please select the service status"
      },
      avg_duration: {
        required: "Please enter the average time it takes to finish the service"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

// now lets do the shandice!
$('#create-service').submit(function(e){
        $('#create-btn').html("Creating Service...");

        e.preventDefault();
         var Toast = Swal.mixin({
	      toast: true,
	      position: 'top-end',
	      showConfirmButton: false,
	      timer: 3000
	    });
        // $(':input[type="submit"]').prop("Creating Service...");

        var form = this;
        $.ajax({
           url:$(form).attr('action'),
           method:$(form).attr('method'),
           data:new FormData(form),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
              $(form).find('span.error-text').text('');
           },
           success:function(data){
                 if($.isEmptyObject(data.error)){
                     if(data.code == 1){
                         $(form)[0].reset();
                         Toast.fire({
					        icon: 'success',
					        title: 'The service has been successfully created!'
					      })
                         $("#create-btn").html("Create Service");
                         
                     }else{
                     }
                 }else{
                     $.each(data.error, function(prefix, val){
                         $(form).find('span.'+prefix+'_error').text(val);
                     });
                 }
           }
        });
   });
</script>
</body>

</html>
