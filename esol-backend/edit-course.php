<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
if (isset($_GET['courseid'])) {
	$course_id = $_GET['courseid'];
	$course_edit_array = array('cid' => $course_id);
	$course_edit_data = $db->query("SELECT * FROM tbl_courses WHERE course_id = :cid",$course_edit_array);
	
}
if (isset($_POST['btn-update'])) {
	$cid = $_GET['courseid'];
	$cname = $_POST['newsheading'];
	$cdesc = $_POST['coursedescription'];
	$array_course = array('cid' => $cid, 'cname' => $cname, 'cdesc' => $cdesc);
	$course_update_sql = $db->query("UPDATE tbl_courses SET course_name = :cname, course_description = :cdesc WHERE course_id = :cid",$array_course);

	if ($course_update_sql) {
		$successMessage = "Course Updated Successfully.!";
		setcookie("cookieCourseSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
		header("Location:".ADMIN_PATH."courses");
	}
	else {
		$successMessage = "Same content updated.!";
		setcookie("cookieCourseInfoMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
		header("Location:".ADMIN_PATH."courses");
	}
 	
}


$include_file = DOC_ROOT.'esol-backend/pages/edit-course-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>