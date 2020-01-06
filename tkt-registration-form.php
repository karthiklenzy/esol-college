<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'classes/mailing.class.php';

if (isset($_POST['btn-inquiry'])) {
	$error_count = 0;
	$error_message = "";

	$student_name = trim($_POST['student_name']);
	$student_surname = trim($_POST['student_surname']);
	$contact_dropdown = filter_var($_POST['contact_by'], FILTER_SANITIZE_STRING);
	$student_landline = trim($_POST['student_landline']);
	$student_mobile = trim($_POST['student_mobile']);
	$student_address = filter_var($_POST['student_address']);
	$student_email = trim($_POST['student_email']);
	$student_dob = filter_var($_POST['datepick_1'], FILTER_SANITIZE_STRING);
	$admission_id = "ADM-MG_";
	$current_date = date("Y-m-d");
	$contact_time = trim($_POST['contact_time']);
	$know = filter_var($_POST['know']);
	$message = filter_var($_POST['message']);

		if (isset($_POST['radio_1'])) { /* student title */
				  $student_title = $_POST['radio_1'];
		}
		
		if ($student_name == "") {
			$error_message .= "<li>Please add student name.</li>";
			$error_count++;
		}
		if ($student_surname == "") {
			$error_message .= "<li>Please add student surname.</li>";
			$error_count++;
		}
		if ($student_dob == "") {
			$error_message .= "<li>Please add student birth day.</li>";
			$error_count++;
		}
		if ($contact_dropdown == "") {
			$error_message .= "<li>Please add contact method.</li>";
			$error_count++;
		}
		if ($student_landline == "") {
			$error_message .= "<li>Please add student landline number.</li>";
			$error_count++;
		}
		if ($student_mobile == "") {
			$error_message .= "<li>Please add student mobile number.</li>";
			$error_count++;
		}
		if ($student_address == "") {
			$error_message .= "<li>Please add student address.</li>";
			$error_count++;
		}
		if ($student_email == "") {
			$error_message .= "<li>Please add student email.</li>";
			$error_count++;
		}
		if ($contact_time == "") {
			$error_message .= "<li>Please add contact time.</li>";
			$error_count++;
		}
		if ($know == "") {
			$know = "None";
		}
		if ($message == "") {
			$message = "None";
		}

		if ($error_count == 0) {
			$studet_array = array('student_title' => $student_title,'student_name' => $student_name, 'student_surname' => $student_surname, 'contact_dropdown' => $contact_dropdown, 'student_landline' => $student_landline, 'student_mobile' => $student_mobile, 'student_address' => $student_address, 'student_email' => $student_email, 'student_dob' => $student_dob, 'contact_time' => $contact_time, 'contact_dropdown' => $contact_dropdown, 'cur_date' => $current_date_time, 'know' => $know, 'message' => $message);
			$studet_sql = $db->query("INSERT INTO tbl_admission_tkt (student_title, student_name, student_surname, student_dob, student_landline, student_mobile, student_address, student_email, student_pre_con_time, student_pre_con_method, reg_date, know_about_us, message) VALUES (:student_title, :student_name, :student_surname, :student_dob, :student_landline, :student_mobile, :student_address, :student_email, :contact_time, :contact_dropdown, :cur_date, :know, :message)", $studet_array);

			if ($studet_sql) {
			    $to = "karthiklenzy@gmail.com";
				$email = "online-system@esol.lk";
				// 	$email_hr = "naflin456@gmail.com";
				$subject = "TKT Admission form submission | ".SITE_NAME;
				$the_heading = $subject;
				$the_message_to_be_sent .= 'TKT new registration<br><br>Name : ';
                $the_message_to_be_sent .=$student_name;
				$send =mailing::html_mail($to,$subject,$the_message_to_be_sent,$email);
				$SuccessMessage = "Successfully Registered.! We will get back to you shortly.!";
				setcookie("SuccessMessage", $SuccessMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."?modal=1");
			}
			else {
				$errorMessage = "Error in student details";
				setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."tkt-registration-form");
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

$include_file = DOC_ROOT.'pages/tkt_registration_form_page.php';
include DOC_ROOT.'template.php';



?>

