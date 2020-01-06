<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'classes/mailing.class.php';
$relation_data = $db->query("SELECT * FROM tbl_relation");

if (isset($_POST['btn-inquiry'])) {
	$error_count = 0;
	$error_message = "";

	$parent_name = trim($_POST['parent_name']);
	$parent_surname = trim($_POST['parent_surname']);
	$parent_profession = trim($_POST['parent_profession']);
	$parent_relation = filter_var($_POST['parent_relationship'], FILTER_SANITIZE_STRING);
	$contact_dropdown = filter_var($_POST['contact_by'], FILTER_SANITIZE_STRING);
	$parent_landline = trim($_POST['parent_landline']);
	$parent_mobile = trim($_POST['parent_mobile']);
	$parent_address = filter_var($_POST['parent_address'], FILTER_SANITIZE_STRING);
	$parent_email = trim($_POST['parent_email']);
	$child_count = $_POST['hiddenstudentcount'];
	$preffered_branch = "";
	$admission_id = "";
	$current_date = date("Y-m-d");
	$contact_time = trim($_POST['contact_time']);
	$know_about = filter_var($_POST['know']);
	$parent_message = filter_var($_POST['message']);
	// preffered branch
			if (isset($_POST['checkbox_malabe'])) {
				if ($preffered_branch == "") {
					$preffered_branch .= "Malabe";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-MLB_";
				}
				else{
					$preffered_branch .= ", Malabe";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-GEN_";
				}
			}
			if (isset($_POST['checkbox_maharagama'])) {
				if ($preffered_branch == "") {
					$preffered_branch .= "Maharagama";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-MG_";
				}
				else{
					$preffered_branch .= ", Maharagama";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-GEN_";
				}
			}
			if (isset($_POST['checkbox_battaramulla'])) {
				if ($preffered_branch == "") {
					$preffered_branch .= "Battaramulla";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-BM_";
				}
				else{
					$preffered_branch .= ", Battaramulla";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-GEN_";
				}
			}
			if (isset($_POST['checkbox_hanwella'])) {
				if ($preffered_branch == "") {
					$preffered_branch .= "Hanwella";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-HW_";
				}
				else{
					$preffered_branch .= ", Hanwella";
					$email_hr = "karthiklenzy@gmail.com";
					$admission_id = "ADM-GEN_";
				}
			}
			if (isset($_POST['radio_1'])) {
			  $parent_title = $_POST['radio_1'];
			}
			if ($know_about == "") {
			$know_about = "None";
			}
			if ($parent_message == "") {
				$parent_message = "None";
			}
	
	for ($x=1; $x <= $child_count; $x++) {
	  	$child_name = trim($_POST['child_firstname_'.$x]);
		$child_surname = trim($_POST['child_surname_'.$x]);
		$child_preff_name = trim($_POST['child_preff_name_'.$x]);
		$child_school = filter_var($_POST['child_schoolname_'.$x], FILTER_SANITIZE_STRING);
		$child_dob = filter_var($_POST['datepick_'.$x], FILTER_SANITIZE_STRING);
		$child_grade = trim($_POST['child_grade_'.$x]);
		$child_marks = trim($_POST['child_marks_'.$x]);
		$child_preffered_day = "";

		// checkbox preffered days
			if (isset($_POST['mon_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Monday";
				}
			}
			if (isset($_POST['tue_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Tuesday";
				}
				else{
					$child_preffered_day .= ", Tuesday";
				}
			}
			if (isset($_POST['wed_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Wednesday";
				}
				else{
					$child_preffered_day .= ", Wednesday";
				}
			}
			if (isset($_POST['thu_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Thursday";
				}
				else{
					$child_preffered_day .= ", Thursday";
				}
			}
			if (isset($_POST['fri_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Friday";
				}
				else{
					$child_preffered_day .= ", Friday";
				}
			}
			if (isset($_POST['Satur_m_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Morning";
				}
				else{
					$child_preffered_day .= ", Saturday Morning";
				}
			}
			if (isset($_POST['Satur_a_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Afternoon";
				}
				else{
					$child_preffered_day .= ", Saturday Afternoon";
				}
			}
			if (isset($_POST['Satur_e_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Evening";
				}
				else{
					$child_preffered_day .= ", Saturday Evening";
				}
			}
	}
	
	if (isset($_POST["checkbox_register"])) {
	   $parent_register = "1";
	} else {
	   $parent_register = "0";
	}
	if (isset($_POST["checkbox_request"])) {
	   $parent_request = "1";
	} else {
	   $parent_request = "0";
	}

	if (($parent_register == 0) && ($parent_request == 0)) {
		$error_message .= "<li>Please check at least one interested checkbox.</li>";
		$error_count++;
	}

	if ($parent_name == "") {
		$error_message .= "<li>Please add the parent name.</li>";
		$error_count++;
	}
	if ($parent_landline == "") {
		$error_message .= "<li>Please add the landline number.</li>";
		$error_count++;
	}
	if ($parent_mobile == "") {
		$error_message .= "<li>Please add the mobile number.</li>";
		$error_count++;
	}
	if ($parent_email == "") {
		$error_message .= "<li>Please add the email.</li>";
		$error_count++;
	}

	if ($error_count == 0) {
	    $getlastrefno_array = array('referencenumber' => $admission_id.'%');
	    $getlastrefno = $db->query("SELECT admission_reference_number FROM tbl_admission WHERE admission_reference_number LIKE :referencenumber ORDER BY parent_id DESC limit 1", $getlastrefno_array);

	  if ($getlastrefno) {
	  	$last_ref_no = $getlastrefno[0]['admission_reference_number'];
	  	$myArray = explode('_', $last_ref_no);
	  	$lastnumber = $myArray[1];
	  	$lastnumber++;

	  	$new_ref_no = $admission_id.$lastnumber;
	  }
	  else {
	  	$new_ref_no = $admission_id.'1';
	  }
	  
		$parent_array = array('parent_title' => $parent_title, 'p_name' => $parent_name, 'ref_no' => $new_ref_no, 'p_surname' => $parent_surname, 'p_profession' => $parent_profession, 'p_relation' => $parent_relation, 'p_landline' => $parent_landline, 'p_mobile' => $parent_mobile, 'p_address' => $parent_address, 'p_email' => $parent_email, 'p_register' => $parent_register, 'p_request' => $parent_request, 'branch' => $preffered_branch, 'contact_dropdown' => $contact_dropdown, 'contact_time' => $contact_time, 'know_about' => $know_about, 'parent_message' => $parent_message, 'added_date' => $current_date_time);

		$parent_sql = $db->query("INSERT INTO tbl_admission (parent_title, parent_name, admission_reference_number, parent_surname, parent_profession, parent_relation, parent_landline, parent_mobile, parent_address, parent_mail, for_register, for_request, parent_contact_method, parent_contact_time, further_information_way, further_information_message, branch_name, admission_date) VALUES (:parent_title, :p_name, :ref_no, :p_surname, :p_profession, :p_relation, :p_landline, :p_mobile, :p_address, :p_email, :p_register, :p_request, :contact_dropdown, :contact_time, :know_about, :parent_message, :branch, :added_date)", $parent_array);

		$p_id = $db->lastInsertId();

		if ($parent_sql) {
		  for ($x=1; $x <= $child_count; $x++) {
		  	$child_name = trim($_POST['child_firstname_'.$x]);
			$child_surname = trim($_POST['child_surname_'.$x]);
			$child_preff_name = trim($_POST['child_preff_name_'.$x]);
			$child_school = filter_var($_POST['child_schoolname_'.$x], FILTER_SANITIZE_STRING);
			$child_dob = filter_var($_POST['datepick_'.$x], FILTER_SANITIZE_STRING);
			$child_grade = trim($_POST['child_grade_'.$x]);
			$child_marks = trim($_POST['child_marks_'.$x]);

			if ($child_name == "") {
				$error_message .= "<li>Please add child name.</li>";
				$error_count++;
			}
			if ($child_surname == "") {
				$error_message .= "<li>Please add child surname.</li>";
				$error_count++;
			}
			if ($child_preff_name == "") {
				$error_message .= "<li>Please add child preferred name.</li>";
				$error_count++;
			}
			if ($child_dob == "") {
				$error_message .= "<li>Please add child birth day.</li>";
				$error_count++;
			}
			if ($child_dob == "") {
				$error_message .= "<li>Please add child birth day.</li>";
				$error_count++;
			}

			if (isset($_POST['radio_group_'.$x])) { /* Child gender */
			  $child_gender = $_POST['radio_group_'.$x];
			}
			
			$child_preffered_day = "";

		// checkbox preffered days
			if (isset($_POST['mon_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Monday";
				}
			}
			if (isset($_POST['tue_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Tuesday";
				}
				else{
					$child_preffered_day .= ", Tuesday";
				}
			}
			if (isset($_POST['wed_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Wednesday";
				}
				else{
					$child_preffered_day .= ", Wednesday";
				}
			}
			if (isset($_POST['thu_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Thursday";
				}
				else{
					$child_preffered_day .= ", Thursday";
				}
			}
			if (isset($_POST['fri_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Friday";
				}
				else{
					$child_preffered_day .= ", Friday";
				}
			}
			if (isset($_POST['Satur_m_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Morning";
				}
				else{
					$child_preffered_day .= ", Saturday Morning";
				}
			}
			if (isset($_POST['Satur_a_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Afternoon";
				}
				else{
					$child_preffered_day .= ", Saturday Afternoon";
				}
			}
			if (isset($_POST['Satur_e_'.$x])) {
				if ($child_preffered_day == "") {
					$child_preffered_day .= "Saturday Evening";
				}
				else{
					$child_preffered_day .= ", Saturday Evening";
				}
			}
		

			if ($error_count == 0) {
				$child_data_array = array('parent_id' => $p_id, 'child_name' => $child_name, 'child_surname' => $child_surname, 'child_preff_name' => $child_preff_name, 'child_school' => $child_school, 'child_dob' => $child_dob, 'child_gender' => $child_gender, 'child_grade' => $child_grade, 'child_marks' => $child_marks, 'child_preffered_day' => $child_preffered_day);
				$child_data_sql = $db->query("INSERT INTO tbl_admission_child (parent_id, child_name, child_surname, child_preff_name, child_school, child_dob, child_gender, child_grade, child_marks, child_preff_day) VALUE (:parent_id, :child_name, :child_surname, :child_preff_name, :child_school, :child_dob, :child_gender, :child_grade, :child_marks, :child_preffered_day)", $child_data_array);
			
				if ($child_data_sql) {
				    
				$SuccessMessage = "Successfully Registered";
				setcookie("SuccessMessage", $SuccessMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."?modal=1");
			  	}
			  	else {
				$errorMessage = "Error in child details";
				setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."admission-form");
			    }

                
					

				if ($send) {
					$message_success = 1;
					$sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";

					//echo $sucessmessage;
				}else{
					/*echo "Mailer Error: " . $mail->ErrorInfo;*/					
					//echo "No";
				} 
				
				
			}


			
		 }
		 if (isset($p_id)) {
		  	include DOC_ROOT.'includes/mailer.php';
		 } 
		  
	}
			else {
			  $errorMessage = "Error in parent details";
			  setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
			  header("Location:".HTTP_PATH."admission-form");	
			}
	}
}

$include_file = DOC_ROOT.'pages/registration_form_page.php';
include DOC_ROOT.'template.php';

if (isset($error_count) != 0) {

?>
<script>
	myFunctionAlert();
</script>
<?php
}
?>