<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";


$users_data = $db->query("SELECT * FROM tbl_user");

if (isset($_GET['userid'])) {
	$user_delete_id = $_GET['userid'];
	$user_delete_array = array('did' => $user_delete_id);
	$user_delete_query = $db->query("DELETE FROM tbl_user WHERE user_id = :did",$user_delete_array);

	if ($user_delete_query) {
		    $successMessage = "User deleted succesfully";
			setcookie("cookieCourseSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
			header("Location:".ADMIN_PATH."users");
	}
	else {
			$successMessage = "Error in deleting user ";
			setcookie("cookieCourseErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
			header("Location:".ADMIN_PATH."users");
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/users-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>