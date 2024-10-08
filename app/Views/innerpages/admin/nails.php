<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_heading; ?></title>
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
include "side_bar.php"; 
include "navigation.php"; 
?>



<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?php echo $title; ?></h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active"><?php echo $page_heading; ?></li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
	<div class="col-4">
	<a href="<?php echo base_url('new_service') ?>" class="btn btn-primary btn-sm"><i class="fa fa-list"></i>  &nbsp;&nbsp; Add New Service</a>
</div>
<div class="col-12">


<div class="card" style="margin-top: 10px;">
<div class="card-header">
	<div class="col-6"><h3 class="card-title"><?php echo $title  ;?></h3></div>

</div>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Service Name</th>
<th>Service Type</th>
<th>Av. Duration (Hrs)</th>
<th>Status</th>
<th>Fee</th>
<th>Notes</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php  foreach ($nails as $key => $nail) {?>

<tr>
<td><?php echo $nail->service_name; ?></td>
<td><?php echo strtoupper($nail->service_category); ?></td>
<td><?php echo strtoupper($nail->average_duration); ?></td>
<td><?php if(strcmp($nail->parent_service, 'None') == 0):$type='Main Service';else:$type='Optional Service';endif;echo strtoupper($type); ?></td>
<td><?php echo 'R'.strtoupper($nail->fee); ?></td>
<td class=""><?php echo $nail->notes; ?></td>
<td class=""><?php echo $nail->status; ?></td>
<td><i class="fa fa-edit text-info"></i>&nbsp;<i class="fa fa-trash text-danger"></i></td>

</tr>
<?php } ?>
</tbody>
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
