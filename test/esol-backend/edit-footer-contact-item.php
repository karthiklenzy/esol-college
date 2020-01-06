<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
// $slider_data = $db->query("SELECT * FROM tbl_main_menu");
if (isset($_GET['itemid'])) {

	$link_id = filter_var($_GET['itemid'], FILTER_SANITIZE_STRING);
	$link_array = array('linkid' => $link_id);
	$sql = $db->query("SELECT * FROM tbl_footer_contact_links WHERE link_id = :linkid",$link_array);

	if ($sql) {
		for ($i=0; $i < count($sql); $i++) { 
			$link_id = $sql[$i]['link_id'];
			$link_name = $sql[$i]['link_name'];
			$link_url = $sql[$i]['link_url'];
		}
	}

	if (isset($_POST['btn-update'])) {

		$btn_link_name = filter_var($_POST['itemname']);
		$btn_link_url = filter_var($_POST['itemlink']);
		$update_array = array('linkid' => $link_id, 'linkname' => $btn_link_name, 'linkurl' => $btn_link_url);
		$sql_update = $db->query("UPDATE tbl_footer_contact_links SET link_name = :linkname, link_url = :linkurl WHERE link_id = :linkid", $update_array);

		if ($sql_update) {
			$successMessage = "Item details updated successfully.!";
			setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-contact");
		}
		else{
			$errorMessage = "Same contents replaced";
			setcookie("cookieSliderInfoMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-contact");
		}

	}


}




$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-contact-item-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>