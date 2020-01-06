<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';

$semester_alert_data = $db->query("SELECT * FROM tbl_calendar_alert");

if (isset($_POST['btn-sem-alert'])) {
	$semester_message = filter_var($_POST['semester_message'], FILTER_SANITIZE_STRING);
	$semester_message_array = array('semester_message' => $semester_message);
	$semester_message_sql = $db->query("INSERT INTO tbl_calendar_alert (calendar_alert_msg) VALUES (:semester_message)", $semester_message_array);

	if ($semester_message_sql) {
		$sucMessage = "calendar alert successfully added.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."calendar-alert");
	}
	else {
		$errorMessage = "Error in calendar alert.!";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."calendar-alert");
	}
}

if (isset($_GET['deleteid'])) {
	$delte_id = filter_var($_GET['deleteid']);
	$delete_array = array('d_id' => $delte_id);
	$delete_sql = $db->query("DELETE FROM tbl_calendar_alert WHERE calendar_alert_id = :d_id", $delete_array);

	if ($delete_sql) {
		$sucMessage = "calendar alert successfully deleted.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."calendar-alert");
	}
	else {
		$errorMessage = "Error in delete.!";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."calendar-alert");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/calendar-alert-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>