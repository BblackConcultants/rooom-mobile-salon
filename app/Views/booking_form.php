<style type="text/css">
  .input-err {
    border-color: red !important;
  }
</style>
<link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<section id="book-now" class="ftco-section ftco-booking bg-light" style="background-color: #ebe8de!important;">
<div class="container ftco-relative">
<div class="row justify-content-center pb-3">
<div class="col-md-10 heading-section text-center ftco-animate">
<span class="subheading">Book Now</span>
<h2 class="mb-4">Make an Appointment</h2>
<p>Please complete the form below to make your booking:</p>
</div>
</div>
<h3 class="vr">Call Us: +27 (83) 594-1822</h3>
<div class="row justify-content-center">
<div class="col-md-10 ftco-animate">
<form action="<?= route_to('make.booking'); ?>" method="post" id="make-booking" autocomplete="off" class="appointment-form">

<div class="row">
<div class="col-sm-6">
<div class="form-group"
><input type="text" class="form-control" id="name" name="name" placeholder="First Name" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<!-- <input type="text" class="form-control appointment_date" id="booking_date" name="booking_date" placeholder="Date" required> -->
<input id="date" data-provide="datepicker">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input id="appointment-time" type="text" id="booking_time" name="booking_time" class="form-control appointment_time" placeholder="Time" required>
<!-- <select class="form-control" id="booking_time" name="booking_time" required>
    <option value="">Please select time slot</option>
</select> -->
<i id="uber" style="padding-bottom: 10px; color: red;">Please note that you will be charged an additional R350 Uber fee for all bookings after 1pm.</i>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="phone" name="phone" minlength="10" placeholder="Phone" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle" id="hairstyle" class="form-control" required>
<option value="">Pick A Hairstyle</option>
<?php  

    foreach ($services as $key => $service) {
        echo '<option value='.$service->service_name.'>'.$service->service_name.'</option>';
    }

?>
</select>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle-size" id="hairstyle-size" class="form-control" required>
<option value="">Choose Hairstyle Size</option>
<?php  

    foreach ($sizes as $key => $size) {
        echo '<option value='.$size->hairstyle_size.'>'.$size->hairstyle_size.'</option>';
    }

?>
</select>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle-color" id="hairstyle-color" class="form-control" required>
<option value="">Choose Hairstyle Color</option>
<?php  

    foreach ($services as $key => $service) {
        echo '<option value='.$service->service_name.'>'.$service->service_name.'</option>';
    }

?>
</select>
</div>
</div>
</div>
<div class="col-sm-6">
  <select id="multiple" name="options" class="js-states form-control" multiple>
    <?php  

        foreach ($optional_services as $key => $option) {
            echo '<option value='.$option->optional_service.'>'.$option->optional_service.' (R'.$option->fee.' )'.'</option>';
        }

    ?>
  </select>
</div>
<div class="col-md-12" style="margin-top:30px;">
<div class="form-group">
<textarea name="notes" id="notes" cols="30" rows="7" class="form-control" placeholder="Special Notes" required></textarea>
</div>
</div>
</div>
<div class="form-group">
<button id="add-booking-btn" type="submit" class="btn btn-primary">Make an Appointment</button>

</div>
</form>
</div>
</div>
</div>
</section>
<script src="assets/js/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    

  })


  $('#phone').keydown(function(event){
        var kc, num, rt = false;
        kc = event.keyCode;
        if(kc == 8 || ((kc > 47 && kc < 58) || (kc > 95 && kc < 106))) rt = true;
        return rt;
    })
    .bind('blur', function(){
        num = parseInt($(this).val());
        num = isNaN(num) ? '' : num;
        if(num && num < 0) num = num*-1;
        $(this).val(num);
    });

   //make new booking
   $('#make-booking').submit(function(e){
        e.preventDefault();
        
        $("#add-booking-btn").html("Booking Your Appointment...");
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
                         $('#myModal').modal('show'); 
                         $('#make-booking').trigger("reset");
                         $("#add-booking-btn").html("Make An Appointment");

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

   
var date = new Date();
date.setDate(date.getDate());

$('#date').datepicker({ 
    startDate: date
});

</script>
