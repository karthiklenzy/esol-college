<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
include_once DOC_ROOT."esol-backend/includes/functions.php";

if (isset($_POST['btn-add'])) {
	$error_count = 0;

	$course_heading = filter_var($_POST['newsheading'],FILTER_SANITIZE_STRING);
	$course_description = $_POST['coursedescription'];
	
	$course_last_id = $db->query("SELECT course_id FROM tbl_courses ORDER BY course_id DESC limit 1");
	if ($course_last_id) {
	  $course_last_id = $course_last_id[0]['course_id'];
	  $course_last_id = $course_last_id + 1;
	}
	else{
	  $course_last_id = 1;
	}
	
	if ($course_description == "") {
		$error_count++;
		$errorMessage = "Please Fill Course Details.!";
	}
	$course_url = cleanURL($course_heading);
	$course_url = $course_last_id."-".$course_url;
	
	if ($course_description == "") {
		$error_count++;
		$errorMessage = "Please Fill Course Details.!";
	}
	$course_url = cleanURL($course_heading);
	$course_url = $course_last_id."-".$course_url;
	if ($error_count == 0) {
		$course_array = array('courseid' => $course_last_id,'coursename' => $course_heading, 'coursedesc' => $course_description, 'filtered_url' => $course_url);
		$course_sql = $db->query("INSERT INTO tbl_courses (course_id, course_name, course_description, course_url) VALUES (:courseid, :coursename, :coursedesc, :filtered_url)",$course_array);
		if ($course_sql) {
			$successMessage = "Course added successfully.!";
			setcookie("cookieCourseSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
			header("Location:".ADMIN_PATH."courses");
		}
		else {
			$successMessage = "Error in adding course.!";
			setcookie("cookieCourseErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."courses");
		}	
	}
	
	
}

$include_file = DOC_ROOT.'esol-backend/pages/add-course-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>