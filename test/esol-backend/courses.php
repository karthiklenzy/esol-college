<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";


$events_data = $db->query("SELECT course_id, course_name FROM tbl_courses");

if (isset($_GET['courseid'])) {
$cid = filter_var($_GET['courseid'],FILTER_SANITIZE_STRING);
$delete_course = array('cid' => $cid);
$delete_data = $db->query("DELETE FROM tbl_courses WHERE course_id = :cid",$delete_course);

if ($delete_data) {
	$successMessage = "Course deleted successfully.!";
	setcookie("cookieCourseSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
	header("Location:".ADMIN_PATH."courses");
}
else {
	$successMessage = "Error in course delete.!";
	setcookie("cookieCourseErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
	header("Location:".ADMIN_PATH."courses");
}
}




$include_file = DOC_ROOT.'esol-backend/pages/courses-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>