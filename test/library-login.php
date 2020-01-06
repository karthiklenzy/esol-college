<?php
include 'top.php';
include_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'classes/mailing.class.php';
if (isset($_POST['btn-login'])) {
	$user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
	$user_password = filter_var($_POST['user_password'], FILTER_SANITIZE_STRING);
	$student_array = array('user_email' => $user_email, 'user_password' => $user_password);
	$student_sql = $db->query("SELECT * FROM tbl_student WHERE student_email = :user_email AND student_password = :user_password AND student_status = 1", $student_array);
	
	if ($student_sql) {
		for ($i=0; $i < count($student_sql); $i++) { 
			$_SESSION['studentid'] = $student_sql[$i]['student_id'];
			$_SESSION['student_name'] = $student_sql[$i]['student_name'];
			$_SESSION['student_level'] = $student_sql[$i]['student_level'];
			$_SESSION['student_email'] = $student_sql[$i]['student_email'];
			$_SESSION['student_password'] = $student_sql[$i]['student_password'];
			$_SESSION['student_type'] = $student_sql[$i]['student_type'];
			
		}
		header("Location:".HTTP_PATH."library");
	}
	else {
		$errorMessage = "Wrong username or password";
		setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		header("Location:".HTTP_PATH."library-login");
	}
}

if (isset($_POST['btn-new-studnt'])) {
		$error_count_email = 0;
		$new_student_email = filter_var($_POST['new_student_email'], FILTER_SANITIZE_STRING);
		$new_student_name = filter_var($_POST['new_student_name'], FILTER_SANITIZE_STRING);
		$validate_email_array = array('validate_email' => $new_student_email);
		$validate_sql = $db->query("SELECT student_email FROM tbl_student WHERE student_email = :validate_email", $validate_email_array);

		if ($validate_sql) {
			$error_count_email++;
			
		}
		
	if ($error_count_email == 0) {
		
		$random_new_id = rand(9999999,9999999999);
		$new_student_password = filter_var($_POST['new_student_password'], FILTER_SANITIZE_STRING);
		$new_student_type = "new";

		$new_student_array = array('new_student_name' => $new_student_name, 'new_student_email' => $new_student_email, 'new_student_password' => $new_student_password, 'new_student_type' => $new_student_type, 'random_new_id' => $random_new_id);
		$new_student_sql = $db->query("INSERT INTO tbl_student (student_name, student_email, student_password, student_type, student_verify_code) VALUES (:new_student_name, :new_student_email, :new_student_password, :new_student_type, :random_new_id)", $new_student_array);

		if ($new_student_sql) {
			// Email verification
			$to = $parent_email;
					$email = $new_student_email;
					$subject = "Library Verification Mail | ".SITE_NAME;
					$the_heading = $subject;

					$the_message_to_be_sent = "Please visit below link to verify your account.!<br>Link : <a href='".HTTP_PATH."".'library-login?studid='."".$random_new_id."'>Link</a>";
					include DOC_ROOT.'includes/email_template.php';

					$send =mailing::html_mail($email,$subject,$the_message_to_be_sent,$email);
					/* -------- DELETE ON LIVE -------------- */
				// 	$message_success = 1;
				// 	$sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";
					/* -------- // DELETE ON LIVE -------------- */

				if ($send) {
					$message_success = 1;
					$sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";

					//echo $sucessmessage;
				}else{
					/*echo "Mailer Error: " . $mail->ErrorInfo;*/					
					//echo "No";
				} 

			$successMessage = "Successfully Registered. Please Check Your Mail for Vefication";
			setcookie("SuccessMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
			header("Location:".HTTP_PATH."library-login");
			
		}
		else {
			$errorMessage = "Error in register";
			setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
			header("Location:".HTTP_PATH."library-login");
		}
	}
	else {
		$error_register = "yes";
		$errorMessage = "This mail already registered";
		setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		

	}
	
}
if (isset($_POST['btn-ex-studnt'])) {
	$error_old_student_count = 0;
	$old_student_name = filter_var($_POST['old_student_name']);
	$old_student_id = filter_var($_POST['old_student_id']);
	$old_student_email = filter_var($_POST['old_student_email']);

	$old_student_email_array = array('old_student_email_validate' => $old_student_email);
	$old_student_email_sql = $db->query("SELECT student_email FROM tbl_student WHERE student_email = :old_student_email_validate", $old_student_email_array);

		if ($old_student_email_sql) {
			$error_old_student_count++;
		}

		if ($error_old_student_count == 0) {

			$old_student_password = filter_var($_POST['old_student_password']);
			$new_student_type = "old";
			$random_ex_id = rand(9999999,9999999999);

			$old_student_array = array('old_student_name' => $old_student_name, 'old_student_id' => $old_student_id, 'old_student_email' => $old_student_email, 'old_student_password' => $old_student_password, 'new_student_type' => $new_student_type, 'random_ex_id' => $random_ex_id);

			$old_student_sql = $db->query("INSERT INTO tbl_student (student_name, student_batch_id,student_email, student_password, student_type, student_verify_code) VALUES (:old_student_name, :old_student_id, :old_student_email, :old_student_password, :new_student_type, :random_ex_id)", $old_student_array);

			if ($old_student_sql) {
				$successMessage = "Successfully Registered. Please Check Your Mail for Vefication (include spam foldder)";
				setcookie("SuccessMessage", $successMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."library-login");
			}
			else {
				$errorMessage = "Error in register";
				setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
				header("Location:".HTTP_PATH."library-login");
			}


	}
	else {
		$error_old_student_register = "yes";
		$errorMessage = "This mail already registered";
		setcookie("ErrorMessage", $errorMessage, time() + (5 * 1), "/"); // 1 minute
		

	}
	
}
if (isset($_GET['studid'])) {
	$verified_id = $_GET['studid'];
	$verified_student_array = array('student_verify_id' => $verified_id);
	$verified_student_sql = $db->query("UPDATE tbl_student SET student_status = 1 WHERE student_verify_code = :student_verify_id", $verified_student_array);
    $message_popup_success = 1;
    $sucessmessage_popup = "Your Account Activated Successfully. Please Login to View Books.!";
	if ($verified_student_sql) {
		
		$message_popup_success = 1;
		$sucessmessage_popup = "Your Account Activated Please Login to View Books.!";
		
	}
	else {
		
		
// 		$errormessage_popup = "Error in Activate Your Account.!";
// 		setcookie("ErrorMessage_popup", $errormessage_popup, time() + (5 * 1), "/");
// 		header("Location:".HTTP_PATH."library-login");
	}
}

include DOC_ROOT.'includes/library-head.php';
include DOC_ROOT.'includes/menu.php';
include DOC_ROOT.'pages/library_login_page.php';
include DOC_ROOT.'includes/library-footer.php';

?>