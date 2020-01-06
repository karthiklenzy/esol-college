<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$events_data = $db->query("SELECT * FROM tbl_events");

if (isset($_POST['btn-add'])) {
	$event_name = filter_var($_POST['eventheading'], FILTER_SANITIZE_STRING);
	$event_date = filter_var($_POST['datepick'], FILTER_SANITIZE_STRING);
	$event_description = filter_var($_POST['eventdescription'],FILTER_SANITIZE_STRING);
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
  	$addEventDetails_array = array('eventname' => $event_name, 'eventdate' => $event_date, 'descr' => $event_description);
	$addEventDetails_query = $db->query("INSERT INTO tbl_events (event_name, event_date, event_description) VALUES (:eventname, :eventdate, :descr)", $addEventDetails_array);

	if ($addEventDetails_query) {
		$get_last_id = $db->query("SELECT MAX(event_id) FROM tbl_events");
		if ($get_last_id) {
			$next_event_id =  $get_last_id[0]["MAX(event_id)"];
		}
		else{
			$next_event_id = 1;
		}

		$event_url = $next_event_id.'-'.$url_for_image;

		$updateurl_array = array('eventid' => $next_event_id, 'eventurl' => $event_url);
		$updateurl_query = $db->query("UPDATE tbl_events SET event_url = :eventurl WHERE event_id = :eventid", $updateurl_array);

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
				$addEventImages_array = array('eventid' => $next_event_id, 'eventimage' => $imagepath);
				$addEventImages_query = $db->query("INSERT INTO tbl_events_image (event_id, event_image_path) VALUES (:eventid, :eventimage)", $addEventImages_array);
			}

			if ($addEventImages_query) {
				$successMessage = "Event added successfully.!";
				setcookie("cookieEventSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
				header("Location:".ADMIN_PATH."events");
			}
			else{
				$errorMessage = "Error in image upload";
				setcookie("cookieEventErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
				header("Location:".ADMIN_PATH."events");
			}
		}
	}
	else{
		$errorMessage = "Error in adding the event";
		setcookie("cookieEventErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."events");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/add-event-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>