<?php 				$to = $parent_email;
					$email = "online-system@esol.lk";
				// 	$email_hr = "naflin456@gmail.com";
					$subject = "Admission form submission | ".SITE_NAME;
					$the_heading = $subject;

					// Parent Details
					$email_massage_array = array('parent_email_id' => $p_id);
					$email_massage_parent_sql = $db->query("SELECT parent_name, parent_relation, admission_reference_number, parent_landline, parent_mobile, parent_mail  FROM tbl_admission WHERE parent_id = :parent_email_id",$email_massage_array);
					include DOC_ROOT.'includes/parent-email-template.php';
					// Student Details
					$email_massage_student_sql = $db->query("SELECT * FROM tbl_admission_child WHERE parent_id = :parent_email_id",$email_massage_array);
					for ($q=0; $q < count($email_massage_sql); $q++) { 
						$parent_email_name = $email_massage_sql[$q]['parent_name'];
					}
					
					
					// $img_logo_url = "http://test.esol.lk/images/logo_advert.png";
					// $message_hr = "<img src='http://test.esol.lk/images/logo_advert.png' style='width: 10%;' />";
					include DOC_ROOT.'includes/email-template.php';

					/*include DOC_ROOT.'includes/email_template.php';
					$the_message_to_be_sent_hr = $email_design;*/

					$send =mailing::html_mail($to,$subject,$the_message_to_be_sent,$email);
					$send =mailing::html_mail($email_hr,$subject,$the_message_to_be_sent_hr,$email);
					/* -------- DELETE ON LIVE -------------- */
					$message_success = 1;
					$sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";
					/* -------- // DELETE ON LIVE -------------- */