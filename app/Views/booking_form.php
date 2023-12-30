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
><input type="text" class="form-control" id="name" name="name" placeholder="First Name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="email" name="email" placeholder="Email">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control appointment_date" id="booking_date" name="booking_date" placeholder="Date">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input id="appointment-time" type="text" id="booking_time" name="booking_time" class="form-control appointment_time" placeholder="Time">
<i id="uber" style="padding-bottom: 10px; color: red;">Please note that you will be charged an additional R350 Uber fee for all bookings after 1pm.</i>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle" id="hairstyle" class="form-control">
<option value>Pick A Hairstyle</option>
<option value>Braids</option>
<option value>Cornrows</option>
<option value>Locs</option>
<option value>Twist</option>
</select>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle-size" id="hairstyle-size" class="form-control">
<option value>Choose Hairstyle Size</option>
<option value>Regular</option>
<option value>Thin</option>
</select>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select name="hairstyle-color" id="hairstyle-color" class="form-control">
<option value>Choose Hairstyle Color</option>
<option value>Black</option>
<option value>Brown</option>
<option value>Blond</option>
<option>Ginger</option>
<option>Red</option>
<option value>White / Gray</option>

</select>
</div>
</div>
</div>
<div class="col-sm-6">
  <select id="multiple" name="options" class="js-states form-control" multiple>
    <option>Expression (R50)</option>
    <option>Brazilian Bundle (R700)</option>
    <option>Beads (R25 per pack)</option>
    <option>Undo (R100)</option>
  </select>
</div>
<div class="col-md-12" style="margin-top:30px;">
<div class="form-group">
<textarea name="notes" id="notes" cols="30" rows="7" class="form-control" placeholder="Special Notes"></textarea>
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
<script>
   //make new booking
   $('#make-booking').submit(function(e){
        e.preventDefault();

        
        // $('#name-err').hide();
        // $('#email-err').hide();
        // $('#phone-err').hide();
        // $('#cat-err').hide();
        // $('#country-err').hide();

        // if(!$('#name').val()){
        //   $('#name-err').show();
        //   $('#name').focus();
        //   return;
        // }
        // if(!$('#email').val()){
        //   $('#email-err').show();
        //   $('#email').focus();

        //   return;
        // }
        // if(!$('#phone').val()){
        //   $('#phone-err').show();
        //   $('#phone').focus();

        //   return;
        // }
        // if ($("#category").val() === "") {
        //     $("#cat-err").show();
        //     $('#category').focus();

        //     return;
        // }
        // if ($("#country").val() === "") {
        //     $("#country-err").show();
        //     $('#country').focus();
            
        //     return;
        // }
        $('#add-booking-btn').prop('disabled', true);
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
                         alert("Congratulations! Your booking has been successfully reserved.");
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
</script>