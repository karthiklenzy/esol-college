<?php
include_once "../top.php";
require_once DOC_ROOT."classes/db_connection.php";
    
if (!isset($_SESSION['userid'])) {
	header("Location:".ADMIN_PATH);
}
else {
	$checkLoginArray = array('userid' => $_SESSION['userid']);
	$checkLogin = $db->query("SELECT * FROM tbl_user WHERE user_id = :userid", $checkLoginArray);

	if ($checkLogin) {
		for ($i=0; $i < count($checkLogin); $i++) { 
			$_SESSION['userid'] = $checkLogin[$i]['user_id'];
			$_SESSION['username'] = $checkLogin[$i]['user_name'];
			$_SESSION['usertype'] = $checkLogin[$i]['user_type'];
			$_SESSION['usersname'] = $checkLogin[$i]['users_name'];
			$_SESSION['userpassword'] = $checkLogin[$i]['password'];
			$_SESSION['userstatus'] = $checkLogin[$i]['user_status'];
		}
	}
	else {
		session_destroy();
		header("Location:".ADMIN_PATH);
	}
}
?>