<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
$slider_data = $db->query("SELECT * FROM tbl_main_menu");

if (isset($_GET['deleteid'])) {
	
	$delete_id = filter_var($_GET['deleteid'], FILTER_SANITIZE_STRING);
	$delete_array = array('deleteid' => $delete_id);
	$delete_query = $db->query("DELETE FROM tbl_main_menu WHERE main_menu_id = :deleteid",$delete_array);

	if ($delete_query) {
		$successMessage = "Menu item successfully deleted";
		setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."edit-menu");
	}
	else {
		$errorMessage = "Error in deleting menu item";
		setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."edit-menu");
	}
}

// Delete slider 


$include_file = DOC_ROOT.'esol-backend/pages/edit-menu-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>