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
<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class=" row text-center" style="margin-left: 0px; margin-bottom: 10px;">
	<h3 class="card-title">Booking Progress</h3>
</div>

<div class="progress mb-3">
<div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
<span class="sr-only">40% Complete (success)</span>
</div>
</div>
<p class="text-muted text-center"></p>
<!-- <ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>Followers</b> <a class="float-right">1,322</a>
</li>
<li class="list-group-item">
<b>Following</b> <a class="float-right">543</a>
</li>
<li class="list-group-item">
<b>Friends</b> <a class="float-right">13,287</a>
</li>
</ul> -->
<!-- <a href="#setting" class="btn btn-primary btn-block"><b>Edit Booking</b></a> -->
<!-- <a class="btn btn-primary btn-block" href="#settings" data-toggle="tab">Booking Settings</a> -->
</div>

</div>

<!-- 
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About Me</h3>
</div>

<div class="card-body">
<strong><i class="fas fa-book mr-1"></i> Education</strong>
<p class="text-muted">
B.S. in Computer Science from the University of Tennessee at Knoxville
</p>
<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
<p class="text-muted">Malibu, California</p>
<hr>
<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
<p class="text-muted">
<span class="tag tag-danger">UI Design</span>
<span class="tag tag-success">Coding</span>
<span class="tag tag-info">Javascript</span>
<span class="tag tag-warning">PHP</span>
<span class="tag tag-primary">Node.js</span>
</p>
<hr>
<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
</div>

</div> -->

</div>

<div class="col-md-9">
<div class="card">
<div class="card-header p-2">
<ul class="nav nav-pills">
<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">My Tasks</a></li>
<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Booking Settings</a></li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="active tab-pane" id="activity">
<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user.png" alt="User Image">
<span class="username">
<a href="javascript:void(0);">Trish Moyo</a>
<a href="javascript:void(0);" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">7:29 PM Thur, 11 Dec 2023</span>
</div>

<p>
Booked an appointment via the Rooom Mobile Salon website
</p>

</div>

<div class="post">
<div class="user-block">
<i class="fa fa-desktop fa-2x"></i>
<span class="username">
<a href="javascript:void(0);">System</a>
<a href="javascript:void(0);" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Auto assigned client to you - 7:30 PM Thur, 11 Dec 2023</span>
</div>

<p>
Auto administrator assignment process
</p>
</div>


<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user.png" alt="User Image">
<span class="username">
<a href="javascript:void(0);">Me</a>
<a href="javascript:void(0);" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">8:00 PM Fri, 12 Dec 2023</span>
</div>

<p>
Accepted the client by entering my Administrator code: RMS********
</p>
</div>

<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user.png" alt="User Image">
<span class="username">
<a href="javascript:void(0);">Me</a>
<a href="javascript:void(0);" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">8:30 PM Fri, 12 Dec 2023</span>
</div>

<p>
Assigned hairstylist Edwin Hammer to Trish Moyo 
</p>
<form class="form-horizontal">
<div class="input-group input-group-sm mb-0">
<input class="form-control form-control-sm" placeholder="Update">
<div class="input-group-append">
<button type="button" class="btn btn-primary">Make An Update</button>
</div>
</div>
</form>
</div>

<!-- <div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="assets/admin/dist/img/user6-128x128.jpg" alt="User Image">
<span class="username">
<a href="javascript:void(0);">Adam Jones</a>
<a href="javascript:void(0);" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Posted 5 photos - 5 days ago</span>
</div>

<div class="row mb-3">
<div class="col-sm-6">
<img class="img-fluid" src="assets/admin/dist/img/photo1.png" alt="Photo">
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<img class="img-fluid mb-3" src="assets/admin/dist/img/photo2.png" alt="Photo">
<img class="img-fluid" src="assets/admin/dist/img/photo3.jpg" alt="Photo">
</div>

<div class="col-sm-6">
<img class="img-fluid mb-3" src="assets/admin/dist/img/photo4.jpg" alt="Photo">
<img class="img-fluid" src="assets/admin/dist/img/photo1.png" alt="Photo">
</div>

</div>

</div>

</div>

<p>
<a href="javascript:void(0);" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="javascript:void(0);" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="javascript:void(0);" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div> -->

</div>

<div class="tab-pane" id="timeline">

<div class="timeline timeline-inverse">

<div class="time-label">
<span class="bg-danger">
13 Dec. 2023
</span>
</div>


<div>
<i class="fas fa-envelope bg-primary"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="javascript:void(0);">Super System Administrator</a> sent you a message</h3>
<div class="timeline-body">
Good day, may you please process the booking within the next 4 days
</div>
<div class="timeline-footer">
<a href="javascript:void(0);" class="btn btn-primary btn-sm">Read more</a>
<a href="javascript:void(0);" class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>


<div>
<i class="fas fa-user bg-info"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
<h3 class="timeline-header border-0"><a href="javascript:void(0);">Trish Moyo</a> is waiting for booking to be processed
</h3>
</div>
</div>


<div>
<i class="fas fa-comments bg-warning"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
<h3 class="timeline-header"><a href="javascript:void(0);">You</a> sent a message to Trish Moyo</h3>
<div class="timeline-body">
Good day Trish, we are happy to confirm that we have received your booking request and have allocated a Rooom Mobile Salon hairstylist to work with you. Please login and upload example photos of the hairstyle that you want so we can proceed and finalize the booking. 
</div>
<div class="timeline-footer">
<a href="javascript:void(0);" class="btn btn-warning btn-flat btn-sm">View Message</a>
</div>
</div>
</div>


<div class="time-label">
<span class="bg-success">
23 Dec. 2023
</span>
</div>


<div>
<i class="fas fa-camera bg-purple"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 2 days ago</span>
<h3 class="timeline-header"><a href="javascript:void(0);">Trish Moyo</a> uploaded new photos</h3>
<div class="timeline-body">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
</div>
</div>
</div>

<!--  -->
<div>
<i class="fas fa-comments bg-warning"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
<h3 class="timeline-header"><a href="javascript:void(0);">Trish Moyo</a> sent sent yo a message</h3>
<div class="timeline-body">
Hi, I have uploaded the images, please let me know if you need anything else from me. 
</div>
<div class="timeline-footer">
<a href="javascript:void(0);" class="btn btn-warning btn-flat btn-sm">View comment</a>
</div>
</div>
</div>

<!-- ./ -->
<div>
<i class="far fa-clock bg-gray"></i>
</div>
</div>
</div>

<div class="tab-pane" id="settings">
<form class="form-horizontal">
<div class="form-group row">
<label for="inputName" class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputName" placeholder="" value="<?= "Trish Moyo"; ?>">
</div>
</div>
<div class="form-group row">
<label for="inputDate" class="col-sm-2 col-form-label">Appointment Date</label>
<div class="col-sm-10">
<input type="date" id="myDate"  class="form-control" value="2023-12-23">
</div>
</div>
<div class="form-group row">
<label for="inputTime" class="col-sm-2 col-form-label">Appointment Time</label>
<div class="col-sm-10">
<input type="time" class="form-control" id="inputEmail" placeholder="" value="10:00:00">
</div>
</div>
<div class="form-group row">
<label for="inputTime" class="col-sm-2 col-form-label">Phone</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputEmail" placeholder="" value="+27 60 657 4453">
</div>
</div>
<div class="form-group row">
<label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
<div class="col-sm-10">
<textarea class="form-control" id="inputExperience" placeholder="">38 Montrose Avenue, Northgate, 2192, Johannesburg</textarea>
</div>
</div>
<div class="form-group row">
<label for="inputSkills" class="col-sm-2 col-form-label">Service</label>
<div class="col-sm-10">

<select class="form-control">
	<option>Knotless Braids</option>
	<option>Cornrows</option>
	<option>Locs</option>
	<option>Twist</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="inputSkills" class="col-sm-2 col-form-label">Size</label>
<div class="col-sm-10">

<select class="form-control">
	<option>Regular</option>
	<option>Thin</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="inputTime" class="col-sm-2 col-form-label">Color</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputEmail" placeholder="" value="Black">
</div>
</div>
<div class="form-group row">
<label for="inputTime" class="col-sm-2 col-form-label">Hairdresser</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputEmail" placeholder="" value="Edwin Hammer">
</div>
</div>
<div class="form-group row">
<label for="inputExperience" class="col-sm-2 col-form-label">Notes</label>
<div class="col-sm-10">
<textarea class="form-control" id="inputExperience" placeholder="">Requesting Quality Service</textarea>
</div>
</div>
<div class="form-check offset-sm-2" style="margin-bottom: 10px;">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Client have their own hairstyle</label>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<button type="button" class="btn btn-primary">Edit Booking</button>
<button type="button" class="btn btn-primary">Confirm Booking</button>
<button type="button" class="btn btn-danger">Cancel Booking</button>
</div>
</div>
</form>
</div>

</div>

</div>
</div>

</div>

</div>

</div>
</section>

</div>
<footer class="main-footer" style="background-color: #000;">
<strong>Copyright &copy; 2023 <a href="javascript:void(0);" style="color: #fbf000;">Rooom Mobile Salon</a>.</strong>
All rights reserved. System Designed & Developed By <a href="https://bblack.co.za/" target="_blank" style="color: #fbf000;">BrightBlack</a>
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
<script type="text/javascript">
	function myFunction() {
	  document.getElementById("myDate").defaultValue = "2014-02-09";
	}
</script>
</body>
</html>
