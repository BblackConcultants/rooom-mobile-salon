<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Hair Salon</title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<?php 
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
<div class="col-md-6">
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
<div class="form-group">
<label for="inputName">Service Name</label>
<input type="text" id="inputName" class="form-control">
</div>
<div class="form-group">
<label for="inputStatus">Parent Service</label>
<select id="inputStatus" class="form-control custom-select">
<option selected disabled>Select one</option>
<option>None</option>
<option>Braids</option>
<option>Cornrow</option>
<option>Locks</option>
<option>Twists</option>
</select>
</div>
<div class="form-group">
<label for="inputDescription">Service Description</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
</div>
<div class="form-group">
<label for="inputStatus">Status</label>
<select id="inputStatus" class="form-control custom-select">
<option selected disabled>Select one</option>
<option>Published</option>
<option>Draft</option>
</select>
</div>
<div class="form-group">
<label for="inputName">Average Duration</label>
<input type="text" id="inputName" class="form-control">
</div>
<div class="form-group">
<label for="inputDescription">Notes</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
</div>
</div>

</div>

</div>
<div class="col-md-6">
<div class="card card-secondary">
<div class="card-header">
<h3 class="card-title">Pricing</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="form-group">
<label for="inputEstimatedBudget">Base Fee</label>
<input type="number" id="inputEstimatedBudget" class="form-control">
</div>
</div>

</div>

</div>
</div>
<div class="row">
<div class="col-12">
<a href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
<input type="button" value="Create Service" class="btn btn-success float-right">
</div>
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
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/project-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:38 GMT -->
</html>
