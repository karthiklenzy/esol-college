<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";
$calendar_data = $db->query("SELECT * FROM tbl_calendar");

if (isset($_POST['btn-intake'])) {
	$location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
	$start_time = filter_var($_POST['starttime'], FILTER_SANITIZE_STRING);
	$end_time = filter_var($_POST['endtime'], FILTER_SANITIZE_STRING);
	$intake_date = filter_var($_POST['intake-date'], FILTER_SANITIZE_STRING);

	$intake_array = array('location' => $location, 'start_time' => $start_time, 'end_time' => $end_time, 'intake_date' => $intake_date);
	$intake_sql = $db->query("INSERT INTO tbl_calendar (calendar_date, calendar_start_time, calendar_end_time, calendar_location) VALUES (:intake_date, :start_time, :end_time, :location)", $intake_array);

	if ($intake_sql) {
		$sucMessage = "Intake date successfully added.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (10 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."intake-calendar");
	}
	else {
		$errorMessage = "Error in adding the date";
		setcookie("cookieErrorMessage", $errorMessage, time() + (10 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."intake-calendar");
	}
}
if (isset($_GET['datedeleteid'])) {
	$date_id_delete = filter_var($_GET['datedeleteid']);
	$delete_array = array('delete_id' => $date_id_delete);
	$delete_sql = $db->query("DELETE FROM tbl_calendar WHERE calendar_id = :delete_id", $delete_array);

	if ($delete_sql) {
		$sucMessage = "Intake date deleted successfully.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (10 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."intake-calendar");
	}
	else {
		$errorMessage = "Error in deleting the date";
		setcookie("cookieErrorMessage", $errorMessage, time() + (10 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."intake-calendar");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/intake-calendar-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>