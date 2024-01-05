<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Salon | Login</title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">
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
<p class="login-box-msg">Sign in to start your session</p>
<?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
       <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif;?>
<form  action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
<div class="input-group mb-3">
    <input type="email" name="email" placeholder="Email" value="" class="form-control" >
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
    <input type="password" name="password" placeholder="Password" class="form-control" >
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
   <button type="submit" class="btn btn-success">Signin</button>
</div>

</div>
</form>
<div class="social-auth-links text-center mt-2 mb-3">
<a href="#" class="btn btn-block btn-primary" style="background-color: #4267B2; color: #fff; border-color: #fff;">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger" style="">
<i class="fab fa-google mr-2"></i> Sign in using Google
</a>
</div>

<p class="mb-1">
<a href="<?php echo base_url('forgot_password'); ?>">I forgot my password</a>
</p>
<p class="mb-0">
<a href="<?php echo base_url('registration'); ?>" class="text-center">Register</a>
</p>
</div>

</div>

</div>


<script src="assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:39 GMT -->
</html>
