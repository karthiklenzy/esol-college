<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$slider_data = $db->query("SELECT * FROM tbl_slider");

// Delete slider 
if (isset($_GET['deletesliderid'])) {

	$slider_id = filter_var($_GET['deletesliderid'], FILTER_SANITIZE_STRING);
	
	$slider_id_delete = array('sliderid' => $slider_id);

	$id_delete = $db->query("DELETE FROM tbl_slider WHERE slider_id = :sliderid",$slider_id_delete);


	if ($id_delete) {
		$successMessage = "Slider successfully deleted";
		setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."sliders");
	}
	else {
		$errorMessage = "Error in deleting slider";
		setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."sliders");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/sliders-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>