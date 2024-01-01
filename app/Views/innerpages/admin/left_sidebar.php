<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
<img src="assets/admin/dist/img/rooom_loader.png" alt="Rooom Mobile Salon Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Rooom Mobile Salon</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="assets/admin/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="<?php echo base_url('profile'); ?>" class="d-block">Zweli Mkhize</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fas fa-directions"></i>
<p>
Navigation

</p>
</a>
<ul class="nav nav-treeview">	
<li class="nav-item">
<a href="<?php echo base_url('dashboard'); ?>" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard</p>
</a>
</li>

</ul>
</li>
<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon fa fa-link"></i>
<p>
Quick Links
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="#" class="nav-link"  data-toggle="modal" data-target="#color-modal">
<i class="far fa-circle nav-icon"></i>
<p>Add Hair Color</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link"  data-toggle="modal" data-target="#size-modal">
<i class="far fa-circle nav-icon"></i>
<p>Add Hairstyle Size</p>
</a>
</li>

</ul>
</li>
<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon far fa-calendar-alt"></i>
<p>
Bookings
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="<?php echo base_url('booking_calendar'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Booking Calendar</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('booking_processing'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Bookings In Progress</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('active_bookings'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Active Bookings</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('historical_bookings'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Historical Bookings</p>
</a>
</li>

</ul>
</li>

<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon fa fa-users"></i>
<p>
Clients
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="<?php echo base_url('clients'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Clients</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('active_clients'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>My Active Clients</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('historical_clients'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>My Historical Clients</p>
</a>
</li>
</ul>
</li>



<li class="nav-item">
<a href="<?php echo base_url('administrators'); ?>" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Administrators
</p>
</a>
</li>

<li class="nav-item">
<a href="<?php echo base_url('hairdressers'); ?>" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
My Hairdressers
</p>
</a>
</li>

<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon fa fa-list"></i>
<p>
Services
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="<?php echo base_url('hairdresser_services'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Hairdresser Services</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('nail_services'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nail Services</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon far fa-envelope"></i>
<p>
Mailbox
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="<?php echo base_url('mailbox'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inbox</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('compose'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Compose</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('read_message'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Read</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon far fa-file"></i>
<p>
Reports
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report 1</p>
</a>
</li>
<li class="nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report 2</p>
</a>
</li>
<li class="nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report 3</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-closed">
<a href="#" class="nav-link">
<i class="nav-icon fa fa-cog"></i>
<p>
System Configurations
<i class="fas fa-angle-down right"></i>
</p>
</a>
<ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="<?php echo base_url('user_management'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>User Management</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('user_roles'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>User Roles</p>
</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="<?php echo base_url('login'); ?>" class="nav-link">
<i class="nav-icon fas fa-unlock"></i>
<p>
Logout
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>
<?php include "admin_footer_lite.php"; ?>
<!-- addd haircolor modal -->
<div class="modal fade" id="color-modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color: #007bff; color: #fff;">
<h4 class="modal-title">Add Hair Color</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h4> Available Hair Colors</h4>
<p>
	<?php foreach ($colors as $key => $color) {
		 echo $color->hair_color.', ';
	}  ?>
		
</p>
<form  action="<?= route_to('create.color'); ?>" method="post" id="create-color" autocomplete="off"  class="form-horizontal">
<div class="form-group row">
<label for="color" class="col-sm-2 col-form-label">Color</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="color" name="color" placeholder="Name" required>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">

</div>
</div>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button id="add-color" type="submit" class="btn btn-primary">Add Color</button>
</form>
</div>
</div>
</div>
</div>
<!-- size modal -->
<div class="modal fade" id="size-modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color: #007bff; color: #fff;">
<h4 class="modal-title">Add Hairstyle Size</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h4> Available Hairstyle Sizes</h4>
<p>
   <?php  

        foreach ($sizes as $key => $size) {
            echo '<option value='.$size->hairstyle_size.'>'.$size->hairstyle_size.'</option>';
        }

    ?>

        
</p>
<form  action="<?= route_to('create.size'); ?>" method="post" id="create-size" autocomplete="off"  class="form-horizontal">
<div class="form-group row">
<label for="color" class="col-sm-2 col-form-label">Hairstyle Size</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="hairstyle_size" name="hairstyle_size" placeholder="Name" required>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">

</div>
</div>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button id="add-size" type="submit" class="btn btn-primary">Add Hairstyle Size</button>
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	$('#create-color').submit(function(e){
        $('#add-color').html("Creating Color...");

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
                         $("#color-modal").modal("hide");
                         Toast.fire({
					        icon: 'success',
					        title: 'The color has been successfully added!'
					      })
                         $("#add-color").html("Add Color");
                         
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
    $('#create-size').submit(function(e){
        $('#add-size').html("Creating Hairstyle Size...");

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
                         $("#size-modal").modal("hide");
                         Toast.fire({
                            icon: 'success',
                            title: 'The Hairstyle Size has been successfully added!'
                          })
                         $("#add-size").html("Add Hairstyle Size");
                         
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