<!DOCTYPE html>
<html lang="en">
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
<link rel="stylesheet" href="assets/admin/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
/*  password validation  */
.validation-span {
  border-radius: 5px;
  display: block;
  font-size: 1.3em;
  text-align: left;
  position: absolute;
  background: #fbf000;
  left: 105%;
  top: 25px;
  width: 260px;
  padding: 7px 10px;
  color: #000;
}
.validation-span:after {
  right: 100%;
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(136, 183, 213, 0);
  border-right-color: #2F558E;
  border-width: 8px;
  margin-top: -8px;
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
<form  action="<?= route_to('register.user'); ?>" method="post" id="register-user" autocomplete="off"  class="form-horizontal">
<div class="input-group mb-3">
<input name="name" id="name" type="text" class="form-control" placeholder="First Name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user-tag"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input name="surname" id="surname" type="text" class="form-control" placeholder="Surname">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user-tag"></span>
</div>
</div>
</div>
<!-- email -->
<div class="input-group mb-3">
<input name="email" id="email" type="email" class="form-control" placeholder="Email Address" >
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<!-- mobile -->
<div class="input-group mb-3">
<input name="phone" id="phone" type="text" class="form-control num-only" placeholder="Phone Number" maxlength="10">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-mobile-alt"></span>
</div>
</div>
</div>
<!--  -->
<div class="input-group mb-3">
<input name="username" id="username" type="text" class="form-control" placeholder="Username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user-tag"></span>
</div>
</div>
</div>
<!-- user type -->
<div class="input-group mb-3">
<select name="user_type" id="user_type" class="form-control">
    <option>Choose User Type</option>
    <?php  
    foreach ($user_types as $key => $user_type) {
        echo "<option value='".$user_type->user_type."'>" . $user_type->user_type. "</option>";
        }
    ?>
</select>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<!-- password -->
<div class="input-group mb-3">
<input type="password" name="password" id="password" class="form-control" placeholder="Password">
<span class="validation-span validation"><strong>Password Hints:</strong><br>&bull;&nbsp;Must be over 5 characters<br>&bull;&nbsp;Must contain at least 1 uppercase character<br>&bull;&nbsp;Must include a number</span>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<!-- pass confirmation -->
<div class="input-group mb-3">
<input name="password-confirmation" id="password-confirmation" type="password" class="form-control" placeholder="Retype password">
<span class="validation validation-span">Please confirm your password</span>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<p class="mb-0">Have an account?
<a href="<?php echo base_url('login') ?>" class="text-center"> Login</a>
</p>
</div>

<div class="col-4">
<button id="register-btn" type="submit" class="btn btn-primary btn-block"><i class="fa fa-user-plus"></i> Register User</button>

</div>

</div>
</form>

</div>

</div>

</div>

<script src="assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>
<script src="assets/admin/plugins/select2/js/select2.full.min.js"></script>
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>
<?php include "admin_footer_lite.php"; ?>

<script type="text/javascript">

$(function () {

  $('#register-user').validate({
    rules: {
      name: {
        required: true,
      },
      surname: {
        required: true,
      },
      email: {
        required: true,
      },
      phone: {
        required: true,
      },
      user_type: {
        required: true,
      },
      password: {
        required: true,
      },
      remember: {
        required: true,
      },
      
    },
    messages: {
      name: {
        required: "Please enter the user's first name"
      },
      surname: {
        required: "Please enter the user's surname"
      },
      email: {
        required: "Please enter the user's email address"
      },
      phone: {
        required: "Please enter the user's phone number"
      },
      user_type: {
        required: "Please enter the user type"
      },
      password: {
        required: "Please enter the user's password"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
      $('#register-btn').html('<i class="fa fa-user-plus"></i> Register User');
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

// password check
var $password = $("#password");
var $confirmPassword = $("#password-confirmation");
//Uppercase and number check variables
var upperCase= new RegExp('[A-Z]');
var numbers = new RegExp('[0-9]');

$('.validation').hide();

//Password rules
function isPasswordValid() {    
    //Check length and then check that password has an uppercase
    return $password.val().length > 5 && 
           $password.val().match(upperCase) &&
           $password.val().match(numbers);
}

function arePasswordsMatching() {
  return $password.val() === $confirmPassword.val();
}

//Can submit
function canSubmit() {
  return isPasswordValid() && arePasswordsMatching();
}

//Check password is over 8 characters
function passwordEvent() {
  
  if(isPasswordValid()) {
    $password.next().hide();
  } else {
    $password.next().show();
  } 
}

//Check Passwords match
function confirmPasswordEvent() {
  
  if(arePasswordsMatching()) {
    $confirmPassword.next().hide();
  } else {
    $confirmPassword.next().show();
  } 
}
//Enable or disablethe submit button 
function enableSubmitEvent() {
  $('input[type=submit]').prop("disabled", !canSubmit());
}

//Run passwords length check
$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

//Run passwords match check
$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

//Run submit button function code
enableSubmitEvent();
</script>
</body>

</html>
