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
    .login-box, .register-box {
            width: 500px;
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
<form id="login-form" action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
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
   <button id="log-in-btn" type="submit" class="btn btn-primary btn-block"><i class="fa fa-lock"></i> Sign In</button>
</div>

</div>
<div class="row" style="margin-top:10px;">
<div class="col-8">
    <p class="mb-1">
        <a href="<?php echo base_url('forgot_password'); ?>">I forgot my password</a>
    </p>
</div>
<div class="col-4">
   <p class="mb-0">
    <a href="<?php echo base_url('registration'); ?>" class="text-center">Register</a>
</p>
</div>
</div>
</form>



</div>

</div>

</div>


<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>
<script src="assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(function () {

  $('#login-form').validate({
    rules: {
      email: {
        required: true,
      },
      password: {
        required: true,
      },
        
    },
    messages: {
      name: {
        required: "Please enter your registered email address"
      },
      surname: {
        required: "Please enter your password"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
      $('#log-in-btn').html('<i class="fa fa-user-lock"></i> Sign In');
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

</script>
</body>
</html>
