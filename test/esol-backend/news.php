<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$slider_data = $db->query("SELECT * FROM tbl_news");

if ((isset($_GET['newsid'])) && (isset($_GET['status']))) {
	$newsid = filter_var($_GET['newsid']);
	$status = filter_var($_GET['status']);

	$updatenewsstatus_array = array('newsid' => $newsid, 'newsstatus' => $status);
	$updatenewsstatus_query = $db->query("UPDATE tbl_news SET news_status = :newsstatus WHERE news_id = :newsid", $updatenewsstatus_array);

	if ($updatenewsstatus_query) {
		if ($status == 1) {
			$successMessage = "News activated successfully.!";
		}
		else{
			$successMessage = "News deactivated successfully.!";
		}
		setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/");
		header("Location:".ADMIN_PATH."news");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/news-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>