<?php  
$session = session();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="categoriesModel" class="brand-link">
<img src="assets/admin/dist/img/rooom_loader.png" alt="Rooom Mobile Salon Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Rooom Mobile Salon</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="assets/admin/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="<?php echo base_url('profile'); ?>" class="d-block" style="color: #fbf000;"><?php echo strtoupper($session->get('username')); ?></a>
<span style="color: #fff;">(<?php echo $session->get('user_type'); ?>)</span>
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

<li class="nav-item">
<a href="<?php echo base_url('dashboard'); ?>" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
</p>
</a>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-link"></i>
<p>
Quick Links
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="<?php echo base_url('add_hairstyle_color'); ?>" class="nav-link">
<i class="fas fa-palette nav-icon"></i>
<p>Add Hair Color</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('add_hairstyle_size'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add Hairstyle Size</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('add_hairstyle_options'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add Hairstyle Options</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('add_user_type'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add User Type</p>
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('add_service_category'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add Service Category</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-calendar-alt"></i>
<p>
Booking Management
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="<?php echo base_url('booking_processing'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Bookings</p>
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
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Client Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
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
<a href="#" class="nav-link">
<i class="nav-icon fas fa-list"></i>
<p>
Service Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<?php //foreach ($service_categories as $key => $cat) {
//    echo '<li class="nav-item">
// <a href="'.base_url('nail_services').'" class="nav-link">
// <i class="far fa-circle nav-icon"></i>
// <p>'.$cat->category.'</p>
// </a>
// </li>';
//}  ?>
   <li class="nav-item">
   <a href="<?php echo base_url('hairstyles'); ?>" class="nav-link">
   <i class="far fa-circle nav-icon"></i>
   <p>Hairstyles</p>
   </a>
   </li>
   <li class="nav-item">
   <a href="<?php echo base_url('nails'); ?>" class="nav-link">
   <i class="far fa-circle nav-icon"></i>
   <p>Nails</p>
   </a>
   </li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-comment-alt"></i>
<p>
Message Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
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
<?php if(strcmp($session->get('user_type'), 'Super Administrator') == 0): ?>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-cog"></i>
<p>
System Configurations
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
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
<li class="nav-item">
<a href="<?php echo base_url('working_hours'); ?>" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Working Hours</p>
</a>
</li>
</ul>
</li>
<?php endif; ?>
<li class="nav-item">
<a href="<?php echo base_url('logout'); ?>" class="nav-link">
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