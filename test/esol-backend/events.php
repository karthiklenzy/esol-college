<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$events_data = $db->query("SELECT * FROM tbl_events");

if (isset($_GET['eventid'])) {
		$event_id = filter_var($_GET['eventid'], FILTER_SANITIZE_STRING);
		$delete_event_array = array('eventid' => $event_id);
		$delete_event_query = $db->query("DELETE FROM tbl_events WHERE event_id = :eventid", $delete_event_array);

		if ($delete_event_query) {
			$delete_event_images_query = $db->query("DELETE FROM tbl_events_image WHERE event_id = :eventid", $delete_event_array);
			
			$successMessage = "Event successfully deleted";
			setcookie("cookieEventSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."events");
	}
	else {
		$errorMessage = "Error in deleting event";
		setcookie("cookieEventErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."events");
	}
}




$include_file = DOC_ROOT.'esol-backend/pages/events-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>