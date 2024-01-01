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
<h3 class="card-title">Available Hairstyle Options</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
  <div class="input-group">
    <?php foreach ($options as $key => $option) {
       echo '<div class="col-md-2">'. $option->optional_service.' <i class="fa fa-trash text-danger"></i></div>';
    }  ?>
  </div>

</div>
</section>
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add New Hairstyle Option</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<form  action="<?= route_to('create.option'); ?>" method="post" id="create-option" autocomplete="off"  class="form-horizontal">
<div class="form-group row">
<label for="color" class="col-sm-2 col-form-label">Optional Service</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="optional_service" name="optional_service" placeholder="Optional Service" required>
</div>
</div>
<div class="form-group row">

<label for="fee" class="col-sm-2 col-form-label">Optional Service Fee</label>
<div class="col-sm-10">
<input type="text" class="form-control decimal" id="fee" name="fee" placeholder="Fee" required>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">

</div>
</div>
</div>
<div class="modal-footer justify-content-between">
<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
<button id="add-option" type="submit" class="btn btn-primary">Add Optional Service</button>
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

  $('#create-option').validate({
    rules: {
      optional_service: {
        required: true,
      },
      fee: {
        required: true,
      },
      
    },
    messages: {
      optional_service: {
        required: "Please enter the hairstyle option"
      },
      fee: {
        required: "Please enter the hairstyle option fee"
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
</script>
</body>

</html>
