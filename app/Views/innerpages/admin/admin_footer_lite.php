<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		  $('.decimal').keypress(function(event) {
			    var charCode = (event.which) ? event.which : event.keyCode

			    if (
			      (charCode != 45 || $(this).val().indexOf('-') != -1) && // “-” CHECK MINUS, AND ONLY ONE.
			      (charCode != 46 || $(this).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
			      (charCode < 48 || charCode > 57))
			      return false;

			    return true;

			 });
	});
</script>
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
     $('#create-option').submit(function(e){
        $('#add-option').html("Creating Option...");

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
                         Toast.fire({
                            icon: 'success',
                            title: 'The Hairstyle option has been successfully added!'
                          })
                         $("#add-size").html("Add Hairstyle Option");
                         
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

     $('#create-user-type').submit(function(e){
        $('#add-user-type').html("Creating User Type...");

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
                         Toast.fire({
                            icon: 'success',
                            title: 'The Hairstyle option has been successfully added!'
                          })
                         $("#add-user-type").html("Add User Type");
                         
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

   $('#create-service-cat').submit(function(e){
        $('#add-cat-btn').html("Creating Service Category...");

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
                         Toast.fire({
                            icon: 'success',
                            title: 'The service category has been successfully added!'
                          })
                         $("#add-cat-btn").html("Add Service Category");
                         
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

   $('#register-user').submit(function(e){
        $('#register-btn').html("Registering User...");

        e.preventDefault();
         var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 6000
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
                            title: 'The user has been registered and pending approval. User will be notified once approved!'
                          })
                         $("#register-btn").html("Register User");
                         
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