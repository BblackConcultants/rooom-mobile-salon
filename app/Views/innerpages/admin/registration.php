<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:39 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Salon | User Registration</title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">

<link rel="stylesheet" href="assets/admin/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<style>
    .card-primary.card-outline {
        border-top: 3px solid #fbf000;
    }
    .btn-primary {
        color: #000;
        background-color: #fbf000;
        border-color: #fbf000;
        box-shadow: none;
    }
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
    <img src="assets/images/logo_black.jpg" alt="">
</div>
<div class="card-body">
<p class="login-box-msg">Register System User</p>
<form action="" method="post">
<div class="input-group mb-3">
<input name="name" type="text" class="form-control" placeholder="Full Name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<!-- email -->
<div class="input-group mb-3">
<input name="email" type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<!-- password -->
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<!-- pass confirmation -->
<div class="input-group mb-3">
<input name="password-confirmation" type="password" class="form-control" placeholder="Retype password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<!-- speciallity -->

<!-- ./ -->



<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
I agree to the <a href="javascript:void(0);">Rooom Mobile Salon Terms & Conditions</a>
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>

</div>
</form>
<p class="mb-0">
<a href="<?php echo base_url('login') ?>" class="text-center">Login</a>
</p>
</div>

</div>

</div>


<script src="assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

</html>
<script src="assets/admin/plugins/select2/js/select2.full.min.js"></script>
