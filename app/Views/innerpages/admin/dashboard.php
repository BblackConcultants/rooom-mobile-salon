<?php include "admin_header.php"; ?>
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__wobble" src="assets/admin/dist/img/rooom_loader.png" alt="Rooom Mobile Salon Loader" height="60" width="60">
</div>


<?php 
require_once "navigation.php"; 
require_once "left_sidebar.php"; 
?>
<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Administrator Dashboard</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active">Administrator Dashboard</li>
</ol>
</div>
</div>
</div>
</div>


<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><img src="assets/images/wallet.png"></span>
<div class="info-box-content">
<span class="info-box-text">Total Bookings Value</span>
<span class="info-box-number">
15, 900.50
<small>ZAR</small>
</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-info elevation-1"><img src="assets/images/calendar.png" alt=""></span>
<div class="info-box-content">
<span class="info-box-text">Upcoming Bookings This Week</span>
<span class="info-box-number">500</span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-info elevation-1"><img src="assets/images/clients.png" alt=""></span>
<div class="info-box-content">
<span class="info-box-text">Clients</span>
<span class="info-box-number">760</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><img src="assets/images/hair-dryer.png" alt=""></span>
<div class="info-box-content">
<span class="info-box-text">Total Hairdressers</span>
<span class="info-box-number">60</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><img src="assets/images/girl.png" alt=""></span>
<div class="info-box-content">
<span class="info-box-text">Hairdresser Services</span>
<span class="info-box-number">50</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><img src="assets/images/chatting.png" alt=""></span>
<div class="info-box-content">
<span class="info-box-text">New Messages</span>
<span class="info-box-number">3</span>
</div>

</div>

</div>

</div>

<!-- <div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Monthly Recap Report</h5>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<div class="btn-group">
<button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
<i class="fas fa-wrench"></i>
</button>
<div class="dropdown-menu dropdown-menu-right" role="menu">
<a href="#" class="dropdown-item">Action</a>
<a href="#" class="dropdown-item">Another action</a>
<a href="#" class="dropdown-item">Something else here</a>
<a class="dropdown-divider"></a>
<a href="#" class="dropdown-item">Separated link</a>
</div>
</div>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-8">
<p class="text-center">
<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
</p>
<div class="chart">

<canvas id="salesChart" height="180" style="height: 180px;"></canvas>
</div>

</div>

<div class="col-md-4">
<p class="text-center">
<strong>Goal Completion</strong>
</p>
<div class="progress-group">
Add Products to Cart
<span class="float-right"><b>160</b>/200</span>
<div class="progress progress-sm">
<div class="progress-bar bg-primary" style="width: 80%"></div>
</div>
</div>

<div class="progress-group">
Complete Purchase
<span class="float-right"><b>310</b>/400</span>
<div class="progress progress-sm">
<div class="progress-bar bg-danger" style="width: 75%"></div>
</div>
</div>

<div class="progress-group">
<span class="progress-text">Visit Premium Page</span>
<span class="float-right"><b>480</b>/800</span>
<div class="progress progress-sm">
<div class="progress-bar bg-success" style="width: 60%"></div>
</div>
</div>

<div class="progress-group">
Send Inquiries
<span class="float-right"><b>250</b>/500</span>
<div class="progress progress-sm">
<div class="progress-bar bg-warning" style="width: 50%"></div>
</div>
</div>

</div>

</div>

</div>

<div class="card-footer">
<div class="row">
<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
<h5 class="description-header">$35,210.43</h5>
<span class="description-text">TOTAL REVENUE</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
<h5 class="description-header">$10,390.90</h5>
<span class="description-text">TOTAL COST</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
<h5 class="description-header">$24,813.53</h5>
<span class="description-text">TOTAL PROFIT</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block">
<span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
<h5 class="description-header">1200</h5>
<span class="description-text">GOAL COMPLETIONS</span>
</div>

</div>
</div>

</div>

</div>

</div>

</div> -->




</div>
</section>

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>

<?php include "admin_footer.php"; ?>