<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
$social_data = $db->query("SELECT * FROM tbl_footer_social_link limit 4");

if ((isset($_GET['socialid'])) && (isset($_GET['socialstatus']))) {
 	$social_id = filter_var($_GET['socialid']);
	$social_stat = filter_var($_GET['socialstatus']);
	$social_array = array('sid' => $social_id, 'sstus' => $social_stat);
	$social_query = $db->query("UPDATE tbl_footer_social_link SET social_status = :sstus WHERE social_id = :sid", $social_array);
	if ($social_stat == 1) {
			$successMessage = "Social activated successfully.!";
		}
		else{
			$successMessage = "Social deactivated successfully.!";
		}
		setcookie("cookieSocialSuccessMessage", $successMessage, time() + (20 * 1), "/");
		header("Location:".ADMIN_PATH."edit-footer-social");
}



$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-social-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>