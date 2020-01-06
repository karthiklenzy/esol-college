<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';

if (isset($_GET['userid'])) {

	$user_id = $_GET['userid'];
	$user_data_array = array('uid' => $user_id);
	$users_edit_data = $db->query("SELECT * FROM tbl_user WHERE user_id = :uid",$user_data_array);
	if ($users_edit_data) {
		for ($i=0; $i < count($users_edit_data); $i++) { 
			$password_old = $users_edit_data[$i]['password'];
		}
	}
	
}

if (isset($_POST['btn-update'])) {
	$user_name = $_POST['username'];
	$password_new = $_POST['userpasswordone'];
	$password_new = md5($password_new);

	$password_new_repeat = $_POST['userpasswordtwo'];
	$password_new_repeat = md5($password_new_repeat);

	if ($password_old == md5($_POST['usercurpassword']) && $password_new == $password_new_repeat) {
		$user_update_array = array('username' => $user_name, 'password' => $password_new, 'uid' => $user_id);
		$user_update_sql = $db->query("UPDATE tbl_user SET user_name = :username, password = :password WHERE user_id = :uid", $user_update_array);

		if ($user_update_sql) {
			$successMessage = "User Details Updated Successfully.!";
			setcookie("cookieUserSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
			header("Location:".ADMIN_PATH."users");
		}
		else {
			$successMessage = "old password / new password doesn't match";
			setcookie("cookieUserErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
			header("Location:".ADMIN_PATH."edit-user?userid=".$user_id);
		}

		
	}
	else {
		$successMessage = "Please Make Sure Your Password on Fields";
		setcookie("cookieCourseErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minutes
		header("Location:".ADMIN_PATH."edit-user?userid=".$user_id);
	}

}
$include_file = DOC_ROOT.'esol-backend/pages/edit-user-page.php';
include DOC_ROOT.'esol-backend/template.php';

?>
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }

}
function myFunction2() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    
}
function myFunction3() {
    var x = document.getElementById("myInput2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    
}
</script>

