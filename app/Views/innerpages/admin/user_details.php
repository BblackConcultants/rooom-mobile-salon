<?php 
$session = session();


?>
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
<link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="assets/admin/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
<h3 class="card-title"><?php echo $page_heading; ?></h3>
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
<div class="col-12 col-md-12 col-lg-10 order-1 order-md-2">
<h3 class=""><?php  ?></h3>
<br>
<div class="text-muted">
  <div class="input-group">
    <div class="col-md-3">
    <p class="text-sm">First Name
    <b class="d-block"><?php echo session()->get('sub_name') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Surname
    <b class="d-block"><?php echo session()->get('sub_surname') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Username
    <b class="d-block"><?php echo session()->get('sub_username') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">User Type
    <b class="d-block"><?php echo session()->get('sub_user_type') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Phone Number
    <b class="d-block"><?php echo session()->get('sub_phone') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Email Address
    <b class="d-block"><?php echo session()->get('sub_email') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Registration Date
    <b class="d-block"><?php echo session()->get('created_at') ?></b>
    </p>
  </div>
  <div class="col-md-3">
    <p class="text-sm">Registration Date
    <b class="d-block"><?php echo session()->get('created_at') ?></b>
    </p>
  </div>
  </div>
<p class="text-sm">Status
  <?php  

    switch (session()->get('sub_status')) {
      case 'Pending':
        $status_class='text-warning';
        $action_btn = '<button id="approve-user" type="submit" class="btn btn-success"><i class="fa fa-check"></i>  &nbsp;&nbsp;Approve User</button>';
        $form_action = route_to('approve.user'); 
        break;
      case 'Active':
        $status_class='text-success';
        $action_btn = '<button id="disapprove-user" type="submit" class="btn btn-danger"><i class="fa fa-times"></i>  &nbsp;&nbsp;Disapprove User</button>';
        $form_action = route_to('disapprove.user'); 
        break;
      case 'Disapproved':
        $status_class='text-danger';
        $action_btn = '<button id="activate-user" type="submit" class="btn btn-info"><i class="fa fa-check"></i>  &nbsp;&nbsp;Activate User</button>';
        $form_action = route_to('approve.user'); 
        break;
      default:
        // code...
        break;
    }
  ?>
<b class="d-block <?php echo $status_class; ?> status"><?php echo session()->get('sub_status'); ?></b>
</p>

</div>
<div class="text-left mt-5 mb-3">
<form action="<?= $form_action; ?>" method="post" id="update-user" autocomplete="off"  class="form-horizontal" >
 <input type="hidden" name="user_id" id="user_id" value="<?php echo session()->get('sub_id') ?>">
<div class="modal-footer justify-content-between">
  <button id="delete-user" type="button" class="btn btn-info" onclick="location.href='<?php echo base_url("user_management"); ?>'"><i class="fa fa-arrow-left"></i>  &nbsp;&nbsp;Back</button>
  <?php echo $action_btn; ?>

</div>
</form>
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
<script src="assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>
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
  //approve user
  $('#update-user').submit(function(e){
        $('#approve-user').html('<i class="fa fa-spinner"></i>&nbsp;Approving User...');

        e.preventDefault();
        var Toast = Swal.mixin({
        toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 4000
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
                            title: 'The user has been approved!'
                          })
                         $('.status').html('Active');
                         $('.status').removeClass('text-warning');
                         $('.status').addClass('text-success');
                         $("#approve-user").html('<i class="fa fa-times"></i>  &nbsp;&nbsp;Disapprove User');
                         $("#approve-user").attr('id', 'disapprove-user');
                         $('#disapprove-user').removeClass('btn-success');
                         $('#disapprove-user').addClass('btn-danger');

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
  // disapprove user
  $('#update-user').submit(function(e) {
    e.preventDefault();
    $('#disapprove-user').html('<i class="fa fa-spinner"></i>&nbsp;Disapproving User...');

    e.preventDefault();
    var Toast = Swal.mixin({
    toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
    return false;
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
                            title: 'The user has been disapproved!'
                          })
                         $('.status').html('Disapproved');
                         $('.status').removeClass('text-success');
                         $('.status').addClass('text-danger');
                         $("#disapprove-user").html('<i class="fa fa-times"></i>  &nbsp;&nbsp;Approve User');
                         $("#disapprove-user").attr('id', 'approve-user');
                         $('#approve-user').removeClass('btn-danger');
                         $('#disapprove-user').addClass('btn-success');

                     }else{
                     }
                 }else{
                     $.each(data.error, function(prefix, val){
                         $(form).find('span.'+prefix+'_error').text(val);
                     });
                 }
           }
        });
  })
</script>
</body>
</html>
<script type="text/javascript">
  
</script>