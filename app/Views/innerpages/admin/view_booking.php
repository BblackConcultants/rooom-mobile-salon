<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/project-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:38 GMT -->
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

<div class="card">
<div class="card-header">
<h3 class="card-title">Booking Detail</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
<div class="row">
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Total Fees</span>
<span class="info-box-number text-center text-muted mb-0">R700</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Estimated Time</span>
<span class="info-box-number text-center text-muted mb-0">3 Hrs</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Service Sought</span>
<span class="info-box-number text-center text-muted mb-0">Knotless Braids</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<h4>Recent Activity</h4>
<div class="post">
<div class="user-block">
<i class="fa fa-user-alt fa-2x"></i>
<span class="username">
<a href="javascript:void(0);">Trish Moyo</a>
</span>
<span class="description">Shared with Admin - 7:45 PM yesterday</span>
</div>

<p>
Confirmed Booking
</p>
<!-- <p>
<a href="javascript:void(0);" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
</p> -->
</div>
<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user.png" alt="User Image">
<span class="username">
<a href="javascript:void(0);">System Administrator</a>
</span>
<span class="description">Sent you a message - Today</span>
</div>

<p>
Hi Trish, thank you for confirming the booking, we will now proceed and allocate a specialist who will come through to you. 
</p>
<!-- <p>
<a href="javascript:void(0);" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
</p> -->
</div>
<!-- <div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user1-128x128.jpg" alt="user image">
<span class="username">
<a href="javascript:void(0);">Jonathan Burke Jr.</a>
</span>
<span class="description">Shared publicly - 5 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="javascript:void(0);" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
</p>
</div> -->
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
<h3 class="text-primary">Details</h3>
<!-- <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p> -->
<br>
<div class="text-muted">
<p class="text-sm">Client Name
<b class="d-block">Trish Moyo</b>
</p>
<p class="text-sm">Contact Number
<b class="d-block">+27 60 657 4453</b>
</p>
<p class="text-sm">Appointment Date
<b class="d-block">23 December 2023</b>
</p>
<p class="text-sm">Appointment Time
<b class="d-block">10 AM</b>
</p>
<p class="text-sm">Client Address
<b class="d-block">38 Montrose Avenue, Northgate, 2192, Johannesburg</b>
</p>
</div>
<h5 class="mt-5 text-muted">Style Example Images</h5>
<ul class="list-unstyled">
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> my_niece.png</a>
</li>
</ul>
<div class="text-left mt-5 mb-3">
<a href="javascript:void(0);" class="btn btn-sm btn-primary">Add files</a>
<a href="javascript:void(0);" class="btn btn-sm btn-warning">Assign Specialist</a>
</div>
</div>
</div>
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

</html>
