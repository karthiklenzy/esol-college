<div class="content">
	<div class="container">
		<div class="col-md-12">
			<section class="posts">
				<div class="info">
					<h3 id="line_1">SUBMIT AN ADMISSIONS ENQUIRY</h3>
					<div class="row">
						<div class="col-md-12 ad_form">
						<form method="post">
						<?php if (isset($_COOKIE['SuccessMessage'])) {?>
			                <div class="alert alert-success-admission">
			                <i class="fas fa-check"></i>&emsp;
			                    <?php echo $_COOKIE['SuccessMessage']; ?>
			                </div>
			                <?php } ?>

			                <?php if (isset($_COOKIE['ErrorMessage'])) {?>
			                <div class="alert alert-danger-admission">
			                <i class="fas fa-times"></i>&emsp;
			                    <?php echo $_COOKIE['ErrorMessage']; ?>
			                </div>
			                <?php } ?>

			                <?php if (isset($_COOKIE['InfoMessage'])) {?>
			                <div class="alert alert-info-admission">
			                <i class="fas fa-exclamation"></i>&emsp;
			                    <?php echo $_COOKIE['InfoMessage']; ?>
			                </div>
			                <?php } ?>

							
							<div class="row" id="line_1" style="margin: 0;">
								<div class="form_div child_new form_margin_top" style="margin-top: -15px !important;">
								
									<h5 id="line_1">Student Details</h5>
									  <div class="form-row">
									    <div class="form-group col-md-12 required_field">
									      <label class="required-field">Title</label>
									    <div class="form-check">
								  
											<label class="radio_button">
											 	<input type="radio" id="radio_mr" name="radio_1" value="Mr">
    										 <label for="radio_mr">Mr.</label>
											</label>
										
								  		</div>
								  		<div class="form-check">
								  
											<label class="radio_button">
											 	<input type="radio" id="radio_mrs" name="radio_1" value="Mrs">
    										 <label for="radio_mrs">Mrs.</label>
											</label>
										
								  		</div>
								  		<div class="form-check">
								  
											<label class="radio_button">
											 	<input type="radio" id="radio_ms" name="radio_1" value="Ms">
    										 <label for="radio_ms">Ms.</label>
											</label>
										
								  		</div>
									    </div>
									    
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-6 required_field">
									      <label class="required-field">First Name</label>
									      <input type="text" class="form-control" name="student_name" placeholder="First Name" autocomplete="off" required value="<?php if(isset($student_name)){ echo $student_name; } ?>">
									    </div>
									    <div class="form-group col-md-6">
									      <label class="required-field">Surname</label>
									      <input type="text" class="form-control" name="student_surname" placeholder="Surname" required value="<?php if(isset($student_surname)){ echo $student_surname; } ?>">
									    </div>
									  </div>
									  <div class="form-row">
								  <div class="form-group col-md-6 required_field">
								  <label class="required-field">Date of Birth</label>
								  <input type="text" class="form-control myDatePicker" name="datepick_1" autocomplete="off" placeholder="Ex : 2001-02-13" value="<?php if(isset($student_dob)){ echo $student_dob; } ?>" required>
								  </div>
								  <div class="form-group col-md-6">
								  	<label class="required-field">Email</label>
									    <input type="email" name="student_email" class="form-control" id="validate-email" placeholder="Email" autocomplete="off" value="<?php if(isset($student_email)){ echo $student_email; } ?>" required>
								  
								  
								  </div>
								  </div>
									  <div class="form-row">
									  <div class="form-group col-md-6 required_field">
									    <label class="required-field">Landline</label>
									    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="student_landline" placeholder="Landline" maxlength="10" autocomplete="off" id="landline" value="<?php if(isset($student_landline)){ echo $student_landline; } ?>" required>
									  </div>
									  <div class="form-group col-md-6 required_field">
									    <label class="required-field">Mobile</label>
									    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" class="form-control" name="student_mobile" id="mobile" placeholder="Mobile" autocomplete="nope" value="<?php if(isset($student_mobile)){ echo $student_mobile; } ?>" required>
									  </div>
									  </div>

									  <div class="form-row">
									  <div class="form-group col-md-6">
									  <label class="required-field">PREFERRED contact time</label>
									    <input type="text" class="form-control" name="contact_time" placeholder="Time" value="" required>
									    <label style="font-size: 12px;color: #3378b7;text-transform: inherit;">( Working hours 10am to 6pm )</label>

									  </div>
									  <div class="form-group col-md-6">
									  	
									    <div class="form-group" id="style-relation">
										   <label class="required-field">contact method</label>
										    <select class="" name="contact_by" id="contact_dropdown" required>
											  <option value="0">--Select--</option>
											  <option value="call">Call</option>
											  <option value="email">Email</option>
											  
											</select>
										</div>
									  </div>
									  </div>
									  <div class="form-row">
									  <div class="form-group col-md-6" style="margin-top: -20px;">
									    <label class="required-field">Address</label>
									    <textarea class="form-control" name="student_address" required rows="4" placeholder="Address" autocomplete="nope" value="" ><?php if(isset($student_address)){ echo $student_address; } ?></textarea>
									  </div>
									  <div class="form-group col-md-6">
									  	
									    
									  </div>
									  </div>
									 
									 </div>
								</div>
								<div class="row" id="line_2" style="margin: 0;">
									<div class="form_div child_new form_margin_top form_further">
									<h5 id="line_1">Further Information</h5>
									<div class="form-row">
									  <div class="form-group col-md-6">
									    <label>How did you know about us?</label>
									    <select name="know">
											  <option value="">--Select--</option>
											  <option value="Internet">Internet</option>
											  <option value="word of mouth">word of mouth</option>
											  <option value="press advert">Press advert</option>
											  <option value="Publications">Publications</option>
											  <option value="Professional recommendation">Professional recommendation</option>
										</select>
									  </div>
									  <div class="form-group col-md-6">
									    <label>Questions &amp; Messages</label>
									    <textarea class="form-control" name="message" rows="1" placeholder=""></textarea>

									  </div>

									  </div>
									  <div class="form-row">
											<div class="form-group col-md-6">
											
											      <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
											     <input type="hidden" name="hiddenstudentcount" id="hiddenstudentcount" value="1">
											     <input type="submit" value="Send Inquiry" class="btn btn-primary" name="btn-inquiry">
											</div>
											<div class="form-group col-md-6"></div>

										</div>

									
									</div>

								</div>
						</form>
						
					</div>	
					
				</div>

			</section>
		</div>
		
	</div>
	<div class="clearfix">&nbsp;</div>
	<!-- / container -->
</div>
<!-- modal -->
	<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog notification-modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body notification"><img src="<?= HTTP_PATH; ?>images/list.png">
          <p style="color: green; font-weight: 600;float: left;padding-left: 15px;"><?php if (isset($_COOKIE['SuccessMessage'])) { echo $_COOKIE['SuccessMessage']; } ?></p>
        </div>
        
      </div>
      
    </div>
  </div>
  <!-- modal end -->
<div id="snackbar"><i class="fas fa-times"></i>&emsp;
	
</div>
<div id="snackbarcontactdrop"><i class="fas fa-times"></i>&emsp;Please select contact method</div>
<div id="snackbarrequired"><i class="fas fa-times"></i>&emsp;Required fields cannot be empty</div>
<div id="snackbarnumber"><i class="fas fa-times"></i>&emsp;Contact must be 10 numbers</div>
<div id="snackbarradio"><i class="fas fa-times"></i>&emsp;Please check gender</div>
<div id="snackbarradiotitle"><i class="fas fa-times"></i>&emsp;Please select title</div>



<script>
$(document).on('keypress','input','.form-control',function(e){

     if (e.which === 32 && !this.value.length)
        e.preventDefault();

    });
//  $("input").on("keypress", function(e) {
//     if (e.which === 32 && !this.value.length)
//         e.preventDefault();
// });
</script>
<script>

$(document).ready(function(){

	$("form").submit(function(){
		var empty = true;
		
    	var errorcount = 0;
    	var errorcount_title_radio = 0;
    	var errorcount_radio = 0;
    	var contact_dropdown = $("#contact_dropdown");
		var contact = contact_dropdown.val();
		var textBox =  $.trim( $('.required_field input[type=text]').val());
		var landline = $("#landline").val().length;
		var mobile = $("#mobile").val().length;
		// var gendercheck = $('input:radio[name=radio_group_1]:checked').val();
		if ($('input:radio[name=radio_1]:checked').length < 1){
	        errorcount_title_radio++;
			}
  		
		if (errorcount_title_radio != 0) {
		    radiotitleAlert();
			return false;
		}
		
		if (textBox == "") {
			requiredAlert();
	        return false;
		}
		if (landline < 10 || mobile < 10) {
			numberAlert();
	        return false;
		}
		if (contact == 0) {
			contactdropAlert();
			return false;
		}
		
		
	});

});
function myFunctionAlert() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};

function dropAlert() {
  var x = document.getElementById("snackbardrop");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function contactdropAlert() {
  var x = document.getElementById("snackbarcontactdrop");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function intrestAlert() {
  var x = document.getElementById("snackbarintrest");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function requiredAlert() {
  var x = document.getElementById("snackbarrequired");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function numberAlert() {
  var x = document.getElementById("snackbarnumber");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function radioAlert() {
  var x = document.getElementById("snackbarradio");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function radiotitleAlert() {
  var x = document.getElementById("snackbarradiotitle");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};

</script>
<!-- recaptcha JS -->
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://www.google.com/recaptcha/api.js?render=6LfNSpQUAAAAAIW5nB9dPeESTWLe-F0Q27tDJcEx"></script> -->
  <script>
  // grecaptcha.ready(function() {
  //     grecaptcha.execute('6LfNSpQUAAAAAIW5nB9dPeESTWLe-F0Q27tDJcEx', {action: 'homepage'}).then(function(token) {
        
  //     });
  // });
  </script>
<script>
// Disable inspect element
// window.oncontextmenu = function () {
//             return false;
//         }
//         $(document).keydown(function (event) {
//             if (event.keyCode == 123) {
//                 return false;
//             }
//             else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
//                 return false;
//             }
//         });
$(function() {
	
	$( ".myDatePicker" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-100:+0", changeMonth: true, maxDate: 0}); 		

});
$(document).on('focus', '.myDatePicker', function() {
    $(this).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-100:+0", changeMonth: true, maxDate: 0});
});
$('input[type=text]').attr('autocomplete', 'off');
</script>

<script>

function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}  
			
			
			function isNumericKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return true;
				return false;
			} 
</script>