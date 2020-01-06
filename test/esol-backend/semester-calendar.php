<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";
$semester_calendar_data = $db->query("SELECT * FROM tbl_sem_calendar ORDER BY sem_cal_id");

if (isset($_POST['btn-sem-date'])) {
	$start_date = filter_var($_POST['start-date'], FILTER_SANITIZE_STRING);
	$end_date = filter_var($_POST['end-date'], FILTER_SANITIZE_STRING);
	$sem_mesage = filter_var($_POST['semester_message'], FILTER_SANITIZE_STRING);
	$user_id = $_SESSION['userid'];
	$locations = "";
	
	if (!empty($_POST['chkboxbranchhanwella'])) {
		if ($locations == "") {
			$locations = $_POST['chkboxbranchhanwella'];
		}
		else{
			$locations .= ",".$_POST['chkboxbranchhanwella'];
		}
	}
	if (!empty($_POST['chkboxbranchmalabe'])) {
		if ($locations == "") {
			$locations = $_POST['chkboxbranchmalabe'];
		}
		else{
			$locations .= ",".$_POST['chkboxbranchmalabe'];
		}
	}
	if (!empty($_POST['chkboxbranchmaharagama'])) {
		if ($locations == "") {
			$locations = $_POST['chkboxbranchmaharagama'];
		}
		else{
			$locations .= ",".$_POST['chkboxbranchmaharagama'];
		}
	}
	if (!empty($_POST['chkboxbranchbattaramulla'])) {
		if ($locations == "") {
			$locations = $_POST['chkboxbranchbattaramulla'];
		}
		else{
			$locations .= ",".$_POST['chkboxbranchbattaramulla'];
		}
	}

	if (!empty($_POST['chkboxbranchall'])) {
		if ($locations == "") {
			$locations = $_POST['chkboxbranchall'];
		}
	}

	// Semester details
	$sem_array = array('start_date' => $start_date, 'end_date' => $end_date, 'sem_mesage' => $sem_mesage, 'locations' => $locations,'user_id' => $user_id);
	$sem_sql = $db->query("INSERT INTO tbl_sem_calendar (sem_cal_start_date, sem_cal_end_date, sem_cal_message, sem_cal_location, user_id) VALUES (:start_date, :end_date, :sem_mesage, :locations, :user_id)", $sem_array);

	if ($sem_sql) {
		$sucMessage = "Semester date successfully added.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."semester-calendar");
	}
	else {
		$errorMessage = "Error in adding date.!";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."semester-calendar");
	}
}
if (isset($_GET['deleteid'])) {
	$delete_date_id = filter_var($_GET['deleteid']);
	$delete_semester_array = array('id' => $delete_date_id);
	$delete_semester_sql = $db->query("DELETE FROM tbl_sem_calendar WHERE sem_cal_id = :id", $delete_semester_array);

	if ($delete_semester_sql) {
		$sucMessage = "Semester date deleted successfully.!";
		setcookie("cookieSuccessMessage", $sucMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."semester-calendar");
	}
	else {
		$errorMessage = "Error in deleting date.!";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."semester-calendar");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/semester-calendar-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>