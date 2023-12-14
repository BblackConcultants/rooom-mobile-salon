<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Hair Salon</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
	<div class="col-4">
	<button type="button" class="btn btn-primary btn-block"><i class="fa fa-calendar-alt"></i>  &nbsp;&nbsp; Make A Booking</button>
</div>
<div class="col-12">


<div class="card" style="margin-top: 10px;">
<div class="card-header">
	<div class="col-6"><h3 class="card-title"><?php echo $page_heading;?></h3></div>

</div>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Client Name</th>
<th>Service</th>
<th>Location</th>
<th>Date</th>
<th>View</th>
</tr>
</thead>
<tbody>
<tr>
<td>Trish Moyo</td>
<td>Knotless Braids
</td>
<td>345 Rhodes Street, Randburg, Johannesburg</td>
<td>18-12-2023 : 1000Hrs</td>
<td><a href="<?php echo base_url('view_booking'); ?>"><i class="fas fa-eye"></i></a></td>
</tr>
<tr>
<td>Candice</td>
<td>Knotless Braids
</td>
<td>340 Walcott Road, Rosebank, Johannesburg</td>
<td>20-12-2023 : 0600Hrs</td>
<td><a href="<?php echo base_url('view_booking'); ?>"><i class="fas fa-eye"></i></a></td>
</tr>
<tr>
<td>Mpho</td>
<td>Jozi Locks
</td>
<td>3 Asmara Road, Equestria, Pretoria</td>
<td>10-12-2023 : 1130Hrs</td>
<td><a href="<?php echo base_url('view_booking'); ?>"><i class="fas fa-eye"></i></a></td>
</tr>
</tbody>
<!-- <tfoot>
<tr>
<th>Client Name</th>
<th>Service</th>
<th>Location</th>
<th>Date</th>
<th>View</th>
</tr>
</tfoot> -->
</table>
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

<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<!-- <script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="assets/admin/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
