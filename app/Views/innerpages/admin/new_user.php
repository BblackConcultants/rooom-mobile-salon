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
include "left_sidebar.php"; 
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
<form action="<?= route_to('create.user'); ?>" method="post" id="create-user" autocomplete="off" class="">
<div class="input-group">
<div class="form-group col-md-6">
<label for="first_name">First Name</label>
<input type="text" id="first_name" name="first_name" class="form-control">
</div>
<div class="form-group col-md-6">
<label for="surname">Surname</label>
<input type="text" id="surname" name="surname" class="form-control">
</div>
</div>
<div class="input-group">
<div class="form-group col-md-6">
<label for="surname">Username</label>
<input type="text" id="username" name="username" class="form-control">
</div>

<div class="form-group col-md-6">
<label for="user_type">User Type</label>
<select id="user_type" name="user_type" class="form-control custom-select">
<?php  
	foreach ($user_types as $key => $user_type) {
    echo "<option value='".$user_type->user_type."'>" . $user_type->user_type. "</option>";
	}
?>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button id="create-user-btn" type="submit" class="btn btn-primary" style="float-right">Create User</button>
</form>
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

});

$(function () {

  $('#create-user').validate({
    rules: {
      first_name: {
        required: true,
      },
      surname: {
        required: true,
      },
      username: {
        required: true,
      },
      user_type: {
        required: true,
      },
      
    },
    messages: {
      first_name: {
        required: "Please enter the first name of the user"
      },
      surname: {
        required: "Please enter the surname of the user"
      },
      username: {
        required: "Please enter the username of the user"
      },
      user_type: {
        required: "Please select the user type"
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
$('#create-user').submit(function(e){
        $('#create-user-btn').html("Creating User...");

        e.preventDefault();
         var Toast = Swal.mixin({
	      toast: true,
	      position: 'top-end',
	      showConfirmButton: false,
	      timer: 3000
	    });

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
					        title: 'The User has been successfully registered!'
					      })
                         $("#create-user-btn").html("Create User");
                         
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
