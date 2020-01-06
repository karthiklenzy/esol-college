<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
// $slider_data = $db->query("SELECT * FROM tbl_footer_forum_links");
if (isset($_GET['forumid'])) {

	$forum_id = filter_var($_GET['forumid'], FILTER_SANITIZE_STRING);
	$forum_array = array('forumid' => $forum_id);
	$sql_forum = $db->query("SELECT * FROM tbl_footer_forum_links WHERE forum_id = :forumid",$forum_array);

	for ($i=0; $i < count($sql_forum); $i++) { 
		$forum_name = $sql_forum[$i]['forum_name'];
		$forum_link = $sql_forum[$i]['forum_link'];
	}

	if (isset($_POST['btn-update'])) {
		    $forum_id = filter_var($_POST['fid']);
			$forum_name = filter_var($_POST['fname']);
			$forum_link = filter_var($_POST['flink']);
			
			$forum_array = array('fid' => $forum_id, 'fname' => $forum_name, 'flink' => $forum_link);
			$sql_forum = $db->query("UPDATE tbl_footer_forum_links SET forum_name = :fname, forum_link = :flink WHERE forum_id = :fid", $forum_array);
			
			if ($sql_forum) {
			$successMessage = "Forum item details updated successfully.!";
			setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-forum");
			}
			else{
			$errorMessage = "Same contents replaced";
			setcookie("cookieSliderInfoMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-forum");
		}
	}

}

$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-forum-item-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>