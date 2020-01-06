<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$events_data = $db->query("SELECT * FROM tbl_events");
 if (isset($_GET['event_id'])) {
    $event_id_value = filter_var($_GET['event_id']);
    $arrayEventArray = array('eventid' => $event_id_value);
    $event_name_var = $db->query("SELECT event_name FROM tbl_events WHERE event_id = :eventid", $arrayEventArray);
    if ($event_name_var) {
    	for ($r=0; $r < count($event_name_var); $r++) { 
    		$event_name = $event_name_var[$r]['event_name'];
    	}
    }
 } 
if (isset($_POST['btn-update'])) {
	// $event_name = filter_var($_POST['eventheading'], FILTER_SANITIZE_STRING);
	// $event_date = filter_var($_POST['datepick'], FILTER_SANITIZE_STRING);
	// $event_name = trim($event_name);
	  $event_name = trim($event_name);
	/* ************ Making the URL ************* */
	  $url_for_image = $event_name;
      //Lower case everything
      $url_for_image = strtolower($url_for_image);
      //Make alphanumeric (removes all other characters)
      $url_for_image = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_image);
      //Clean up multiple dashes or whitespaces
      $url_for_image = preg_replace("/[\s-]+/", " ", $url_for_image);
      //Convert whitespaces and underscore to dash
      $url_for_image = preg_replace("/[\s_]/", "-", $url_for_image);
  	/* ************ Making the URL ************* */

		$get_last_id = $db->query("SELECT MAX(event_id) FROM tbl_events");
		if ($get_last_id) {
			$next_event_id =  $get_last_id[0]["MAX(event_id)"];
		}
		else{
			$next_event_id = 1;
		}
		$event_url = $next_event_id.'-'.$url_for_image;
		$filepath_and_name = DOC_ROOT."uploads/images/events/event_".$event_url;
		$filepath_for_images_without_doc_root = "uploads/images/events/event_".$event_url;

		if(!is_dir($filepath_and_name)){
	      mkdir($filepath_and_name, 0755);
	    }

		$path_multiple = $filepath_for_images_without_doc_root.'/';
		include DOC_ROOT.'esol-backend/includes/multiple-image-upload.php';

		if ($uploadOk_for_multiple_for_multiple == 1) {
			for ($x=0; $x < count($allImagesArray); $x++) {
				$imagepath = $allImagesArray[$x];
				$addEventImages_array = array('eventid' => $event_id_value, 'eventimage' => $imagepath);
				$addEventImages_query = $db->query("INSERT INTO tbl_events_image (event_id, event_image_path) VALUES (:eventid, :eventimage)", $addEventImages_array);
			}

			if ($addEventImages_query) {
				$successMessage = "Event edited successfully.!";
				setcookie("cookieEventSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
				header("Location:".ADMIN_PATH."events");
			}
			else{
				$errorMessage = "Error in image upload";
				setcookie("cookieEventErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
				header("Location:".ADMIN_PATH."events");
			}
		
	}
	else{
		$errorMessage = "Error in editing the event";
		setcookie("cookieEventErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."events");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/edit-event-image-upload-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>