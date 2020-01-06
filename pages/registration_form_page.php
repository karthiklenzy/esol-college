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

							<div class="form_div intrest_div">
								<h5 id="line_1" class="required-field">Are you interested in?</h5>
								  <div class="form-row intrest">
								    
								    <div class="form-group col-md-4 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_register" value="1">
								          <span class="box"></span>
								          REGISTERING MY CHILD
								        </label>
								      </div>

								    </div>
								    <div class="form-group col-md-4 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_request" value="1">
								          <span class="box"></span>
								          REQUEST A BROCHURE
								        </label>
								      </div>

								    </div>
								    <div class="form-group col-md-4 check">
								      

								    </div>
								  </div>
								  
							</div>
							<div class="form_div intrest_div">
								<h5 id="line_1" class="required-field">Your interested branch</h5>
								  <div class="form-row branch">
								    
								    <div class="form-group col-md-3 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_malabe" value="1">
								          <span class="box"></span>
								          Malabe
								        </label>
								      </div>

								    </div>
								    <div class="form-group col-md-3 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_maharagama" value="1">
								          <span class="box"></span>
								          Maharagama
								        </label>
								      </div>

								    </div>
								    <div class="form-group col-md-3 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_battaramulla" value="1">
								          <span class="box"></span>
								          Battaramulla
								        </label>
								      </div>

								    </div>
								    <div class="form-group col-md-3 check">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox" name="checkbox_hanwella" value="1">
								          <span class="box"></span>
								          Hanwella
								        </label>
								      </div>

								    </div>
								  </div>
								  
							</div>
							<div class="row" style="margin: 0;">
							<div class="form_div child_new form_margin_top" style="margin-top: 10px !important;width: 100%;">
							
								<h5 id="line_1">Child #1&emsp;</h5>
								  <div class="form-row">
								    <div class="form-group col-md-6 required_field">
								      <label class="required-field">First Name</label>
								      <input type="text" name="child_firstname_1" class="form-control" placeholder="First Name" value="<?php if(isset($child_name)){ echo $child_name; } ?>" required>
								      <span class="underline"></span>
								    </div>
								    <div class="form-group col-md-6 required_field">
								      <label class="required-field">Surname</label>
								      <input type="text" name="child_surname_1" class="form-control input" placeholder="Surname" autocomplete="off" value="<?php if(isset($child_surname)){ echo $child_surname; } ?>" required>
								    </div>
								  </div>
								  <div class="form-row">
								  <div class="form-group col-md-6 required_field">
								    <label class="required-field">Child's Preferred Name</label>
								    <input type="text" class="form-control" name="child_preff_name_1" autocomplete="off" placeholder="Preferred Name" value="<?php if(isset($child_preff_name)){ echo $child_preff_name; } ?>" required>

								  
								  </div>
								  <div class="form-group col-md-6">
								    <label>Current School / Nursery</label>
								    <input type="text" class="form-control" name="child_schoolname_1" placeholder="Current School / Nursery" autocomplete="off" value="<?php if(isset($child_school)){ echo $child_school; } ?>">

								 </div>
								  </div>

								  <div class="form-row">
								  <div class="form-group col-md-6">
								  <label class="required-field">Date of Birth</label>
								  <input type="text" class="form-control myDatePicker" name="datepick_1" autocomplete="off" placeholder="Ex : 2001-02-13" value="<?php if(isset($child_dob)){ echo $child_dob; } ?>" required>
								  </div>
								  <div class="form-group col-md-6">
								  <label class="required-field">Gender</label>
								  <div class="form-check">
								  
										<label class="radio_button">
											 <input type="radio" id="male_id_1" name="radio_group_1" value="Male">
    										 <label for="male_id_1">Male</label>
										</label>
										
								  </div>
								  <div class="form-check">
								  
										<label class="radio_button">
											<input type="radio" id="female_id_1" name="radio_group_1" value="Female">
    										<label for="female_id_1">Female</label>
										</label>
								  </div>
								  </div>
								  </div>

								  <div class="form-row">
								  <div class="form-group col-md-6">
								  <label>Grade</label>
								      <input type="text" class="form-control" name="child_grade_1" placeholder="Grade" value="<?php if(isset($child_grade)){ echo $child_grade; } ?>">
								  </div>
								  <div class="form-group col-md-6">
								  <label>Term Test Mark for English</label>
								      <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" maxlength="3" name="child_marks_1" autocomplete="off" value="<?php if(isset($child_marks)){ echo $child_marks; } ?>">
								  </div>
								  </div>

								  <div class="form-row">
								  <div class="form-group col-md-6">
								  <label class="required-field">Preferred Days</label>
								  <div class="form-group checkboxes_1">
								  	<div class="col-md-3 ui nopadding">   
										  <div class="checkbox">
												<label>
												  <input type="checkbox" name="mon_1" data-ng-model="example.check" value="Monday">
												  <span class="box"></span>
												  Mon
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="tue_1" data-ng-model="example.check" value="Tuesday">
												  <span class="box"></span>
												  Tue
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="wed_1" data-ng-model="example.check" value="wednesday">
												  <span class="box"></span>
												  Wed
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="thu_1" data-ng-model="example.check" value="Thursday">
												  <span class="box"></span>
												  Thu
												</label>
											</div>
									</div>
									<div class="col-md-3 nopadding">   
										  <div class="checkbox">
												<label>
												  <input type="checkbox" name="fri_1" data-ng-model="example.check" value="Friday">
												  <span class="box"></span>
												  Fri
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="Satur_m_1" data-ng-model="example.check" value="Saturday Morning">
												  <span class="box"></span>
												  Satur M
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="Satur_a_1" data-ng-model="example.check" value="Saturday afternoon">
												  <span class="box"></span>
												  Satur A
												</label>
											</div>
											<div class="checkbox">
												<label>
												  <input type="checkbox" name="Satur_e_1" data-ng-model="example.check" value="Saturday evening">
												  <span class="box"></span>
												  Satur E
												</label>
											</div>
									</div>
								  </div>	  
									
								  </div>
								  <div class="form-group col-md-6">
								  <label class="desc_text_1" style="color: #3378b7;font-weight: bold !important;text-align: right;">Do you have any other children you wish to apply? If Yes, click "Add child" below and enter the details.</label>
								  
								  </div>
								  </div>
								  </div>
								</div>
								
							  <div class="form-row">
							  	<div class="form-group col-md-12">
								  	<div id='TextBoxesGroup'>
										
									</div>
								</div>
							  </div>

							  <div class="form-row form_button_div">
								  <div class="form-group col-md-6 col-xs-12">
								  <a id='removeButton' class="btn btn-primary add_mar add_margin" name="delete-child" style="background: #3378b7;color: white;width: auto;margin-left: 13px;float: left;"><i class="fas fa-user-minus"></i>&emsp;Remove Child</a>
								  </div>
								  <div class="form-group col-md-6 col-xs-12">
								<a id='addButton' class="btn btn-primary add_mar add_margin adchild" style="color: white;width: auto;margin-right: 13px;float: right;"><i class="fas fa-user-plus" name="add-child"></i>&emsp;Add Child</a>
								</div>
								
							 </div>
							<div class="row" id="line_1" style="margin: 0;">
								<div class="form_div child_new form_margin_top" style="margin-top: -15px !important;">
								
									<h5 id="line_1">Parent / Guardian’s Details</h5>
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
									      <input type="text" class="form-control" name="parent_name" placeholder="First Name" autocomplete="off" required value="<?php if(isset($parent_name)){ echo $parent_name; } ?>">
									    </div>
									    <div class="form-group col-md-6">
									      <label>Surname</label>
									      <input type="text" class="form-control" name="parent_surname" placeholder="Surname" value="<?php if(isset($parent_surname)){ echo $parent_surname; } ?>">
									    </div>
									  </div>
									  <div class="form-row">
									  <div class="form-group col-md-6">
									    <label>Profession</label>
									    <input type="text" class="form-control" name="parent_profession" placeholder="Profession" value="<?php if(isset($parent_profession)){ echo $parent_profession; } ?>">
									  </div>
									  <div class="form-group col-md-6">
									  	
									    <div class="form-group" id="style-relation">
										   <label class="required-field">Relationship to the student</label>
										    <select class="" name="parent_relationship" id="relationdrop" required>
											  <option value="0">--Select--</option>
											  <?php if ($relation_data) {
											  	for ($x=0; $x < count($relation_data); $x++) { ?>
											  <option value="<?= $relation_data[$x]['relation_name']; ?>"><?= $relation_data[$x]['relation_name']; ?></option>
											  <?php }}?>
											</select>
										</div>
									  </div>
									  </div>
									  <div class="form-row">
									  <div class="form-group col-md-6 required_field">
									    <label class="required-field">Landline</label>
									    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="parent_landline" placeholder="Landline" maxlength="10" autocomplete="off" id="landline" value="<?php if(isset($parent_landline)){ echo $parent_landline; } ?>" required>
									  </div>
									  <div class="form-group col-md-6 required_field">
									    <label class="required-field">Mobile</label>
									    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" class="form-control" name="parent_mobile" id="mobile" placeholder="Mobile" autocomplete="nope" value="<?php if(isset($parent_mobile)){ echo $parent_mobile; } ?>" required>
									  </div>
									  </div>

									  <div class="form-row">
									  <div class="form-group col-md-6">
									    <label>Address</label>
									    <textarea class="form-control" name="parent_address" rows="1" placeholder="Address" autocomplete="nope" value="<?php if(isset($parent_address)){ echo $parent_address; } ?>"></textarea>
									  </div>
									  <div class="form-group col-md-6 required_field">
									    <label class="required-field">Email</label>
									    <input type="email" name="parent_email" class="form-control" id="validate-email" placeholder="Email" autocomplete="off"  value="<?php if(isset($parent_email)){ echo $parent_email; } ?>" required>
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
											  <option value="call-english">Call (English)</option>
											  <option value="call-sinhala">Call (Sinhala)</option>
											  <option value="call-tamil">Call (Tamil)</option>
											  <option value="email">Email</option>
											  
											</select>
										</div>
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

<div id="snackbar"><i class="fas fa-times"></i>&emsp;
	<?php if (isset($error_message)) {
	  echo '<ul>'.$error_message.'<ul>';
	} else{ ?>
	Only can add 5 children
	<?php } ?>
</div>

<div id="snackbarcheckbox"><i class="fas fa-times"></i>&emsp;Please select preferred day</div>
<div id="snackbardrop"><i class="fas fa-times"></i>&emsp;Please select relationship</div>
<div id="snackbarcontactdrop"><i class="fas fa-times"></i>&emsp;Please select contact method</div>
<div id="snackbarintrest"><i class="fas fa-times"></i>&emsp;Please select intrested option</div>
<div id="snackbarrequired"><i class="fas fa-times"></i>&emsp;Required fields cannot be empty</div>
<div id="snackbarnumber"><i class="fas fa-times"></i>&emsp;Contact must be 10 numbers</div>
<div id="snackbarradio"><i class="fas fa-times"></i>&emsp;Please check gender</div>
<div id="snackbarradiotitle"><i class="fas fa-times"></i>&emsp;Please select title</div>
<div id="snackbarbranch"><i class="fas fa-times"></i>&emsp;Please select branch</div>


<script>
$(document).ready(function(){

<?php
/*if (isset($child_count)) {
  if ($child_count > 1) {
	for ($i=2; $i <= $child_count; $i++) { 
		?>

		<?php
	}
  }
}*/
?>

	var counterr = "success";
    var counter = 1;
	if (counter==1) {
		$("#removeButton").hide();
	} 

    $("#addButton").click(function () {

	if(counter>4){
			myFunctionAlert();
            return false;
            
    }
	if (counter!=0) {
		 $("#removeButton").show();
	} 
	
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);
                
	counter++;
	$("#hiddenstudentcount").val(counter);
	
	newTextBoxDiv.after().html('<div class="form_div_child child_new form_margin_top" style="margin-top: 10px !important;"><h5 id="line_1">Child #' + counter + '</h5><div class="form-row"><div class="form-group col-md-6"> <label class="required-field">First Name</label> <input type="text" name="child_firstname_' + counter + '" class="form-control" placeholder="First Name" required> <span class="underline"></span></div><div class="form-group col-md-6"> <label class="required-field">Surname</label> <input type="text" name="child_surname_' + counter + '" class="form-control input" placeholder="Surname" required></div></div><div class="form-row"><div class="form-group col-md-6"> <label class="required-field">Preferred Name</label> <input type="text" class="form-control" name="child_preff_name_' + counter + '" placeholder="Preferred Name" required></div><div class="form-group col-md-6"> <label>Current School / Nursery</label> <input type="text" class="form-control" name="child_schoolname_' + counter + '" placeholder="Current School / Nursery"></div></div><div class="form-row"><div class="form-group col-md-6"> <label class="required-field">Date of Birth</label> <input type="text" class="form-control myDatePicker" name="datepick_' + counter + '" autocomplete="off" placeholder="Ex : 2001-02-13" required></div><div class="form-group col-md-6"> <label class="required-field">Gender</label><div class="form-check"> <label class="radio_button"> <input type="radio" id="male_id_' + counter + '" name="radio_group_' + counter + '" value="Male"> <label for="male_id_' + counter + '">Male</label> </label></div><div class="form-check"> <label class="radio_button"> <input type="radio" id="female_id_' + counter + '" name="radio_group_' + counter + '" value="Female"> <label for="female_id_' + counter + '">Female</label> </label></div></div></div><div class="form-row"><div class="form-group col-md-6"> <label>Grade</label> <input type="text" class="form-control" name="child_grade_' + counter + '" placeholder="Grade"></div><div class="form-group col-md-6"> <label>Term Test Mark for English</label> <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,' + "''" + ');" class="form-control" maxlength="3" name="child_marks_' + counter + '" autocomplete="off"></div></div><div class="form-row"><div class="form-group col-md-8"> <label class="required-field">Preferred Days</label><div class="form-group checkboxes_' + counter + '"><div class="col-md-3 ui nopadding"><div class="checkbox"> <label> <input type="checkbox" name="mon_' + counter + '"> <span class="box"></span> Mon </label></div><div class="checkbox"> <label> <input type="checkbox" name="tue_' + counter + '"> <span class="box"></span> Tue </label></div><div class="checkbox"> <label> <input type="checkbox" name="wed_' + counter + '"> <span class="box"></span> Wed </label></div><div class="checkbox"> <label> <input type="checkbox" name="thu_' + counter + '"> <span class="box"></span> Thu </label></div></div><div class="col-md-3 nopadding"><div class="checkbox"> <label> <input type="checkbox" name="fri_' + counter + '"> <span class="box"></span> Fri </label></div><div class="checkbox"> <label> <input type="checkbox" name="Satur_m_' + counter + '"> <span class="box"></span> Satur M </label></div><div class="checkbox"> <label> <input type="checkbox" name="Satur_a_' + counter + '"> <span class="box"></span> Satur A </label></div><div class="checkbox"> <label> <input type="checkbox" name="Satur_e_' + counter + '"> <span class="box"></span> Satur E </label></div></div></div></div></div></div>');
            
	newTextBoxDiv.appendTo("#TextBoxesGroup");

		

	});

     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
	counter--;
	$("#hiddenstudentcount").val(counter);
        $("#TextBoxDiv" + counter).remove();
	if (counter==1) {
		$("#removeButton").hide();
	}		
     });
  });
 
</script>
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
		var childcount = document.getElementById("hiddenstudentcount").value;
    	var errorcount = 0;
    	var errorcount_radio = 0;
    	var errorcount_title_radio = 0;
    	var dropdown = $("#relationdrop");
		var relation = dropdown.val();
		var contact_dropdown = $("#contact_dropdown");
		var contact = contact_dropdown.val();
		var textBox =  $.trim( $('.required_field input[type=text]').val());
		var landline = $("#landline").val().length;
		var mobile = $("#mobile").val().length;
		// var gendercheck = $('input:radio[name=radio_group_1]:checked').val();
		
  		if ($('.intrest input:checkbox').filter(':checked').length < 1){
	        intrestAlert();
	        return false;
		}
		if ($('.branch input:checkbox').filter(':checked').length < 1){
	        branchAlert();
	        return false;
		}
        if ($('input:radio[name=radio_1]:checked').length < 1){
	        errorcount_title_radio++;
			}
		for (i = 1; i <= childcount; i++) {
			if ($('.checkboxes_' + i + ' input:checkbox').filter(':checked').length < 1){
	        errorcount++;
			}
			if ($('input:radio[name=radio_group_' + i + ']:checked').length < 1){
	        errorcount_radio++;
			}
		}
		
		if (errorcount_radio != 0) {
		    radioAlert();
			return false;
		}
		if (errorcount != 0) {
			checkboxAlert();
			return false;
		}
        if (errorcount_title_radio != 0) {
		    radiotitleAlert();
			return false;
		}
		if (relation == 0) {
			dropAlert();
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
function checkboxAlert() {
  var x = document.getElementById("snackbarcheckbox");
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
function branchAlert() {
  var x = document.getElementById("snackbarbranch");
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