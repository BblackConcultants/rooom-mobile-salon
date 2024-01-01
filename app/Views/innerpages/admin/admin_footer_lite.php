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