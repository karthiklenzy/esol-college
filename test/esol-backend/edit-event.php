<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
// $events_data = $db->query("SELECT * FROM tbl_events");

if (isset($_GET['eventid'])) {
	
	$event_id = filter_var($_GET['eventid']);
	$edit_event_array = array('eventid' => $event_id);
	$edit_event_sql = $db->query("SELECT * FROM tbl_events WHERE event_id = :eventid",$edit_event_array);


	if ($edit_event_sql) {
		$edit_image_sql = $db->query("SELECT * FROM tbl_events_image WHERE event_id = :eventid ORDER BY image_id DESC",$edit_event_array);
		// for ($y=0; $y < count($edit_image_sql); $y++) { 
		// 	$image_path = $edit_image_sql[$y]['event_image_path'];
		// }
		
	}

}
if (isset($_GET['eventdeleteid'])) {
	$deleventid = filter_var($_GET['eventidafterdelete']);
	$event_delete_id = filter_var($_GET['eventdeleteid']);
	$event_image_delete_array = array('deleteid' => $event_delete_id);
	$event_image_delete_query = $db->query("DELETE FROM tbl_events_image WHERE image_id = :deleteid ORDER BY image_id ASC",$event_image_delete_array);

	if ($event_image_delete_query) {
		// $event_delete_id_two = filter_var($_GET['eventdeleteid']);
		// $event_select_array = array('select_id' => $event_delete_id);
		// $event_image_select_query = $db->query("SELECT event_id FROM tbl_events_image WHERE image_id = :select_id",$event_select_array);

		// if ($event_image_select_query) {
		// 	for ($x=0; $x < count($event_image_select_query); $x++) { 
		// 		$id_main = filter_var($event_image_select_query[$x]['event_id']);
		// 	}
		// }
		
		$successMessage = "Event image successfully deleted";
		setcookie("cookieDeleteSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."edit-event?eventid=".$deleventid);
	}
	else {
		$errorMessage = "Error in deleting image";
		setcookie("cookieDeleteErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."edit-event");
	}
}





$include_file = DOC_ROOT.'esol-backend/pages/edit-event-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>