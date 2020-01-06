<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
if (isset($_POST['btn-add'])) {
	$full_name = filter_var($_POST['fullname'],FILTER_SANITIZE_STRING);
	$full_name = trim($full_name);

	$user_name = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
	$user_name = trim($user_name);

	$user_type = $_POST['usertype'];

	$password = md5($_POST['userpasswordone']);
	$password_confirm = md5($_POST['userpasswordtwo']);

	$user_select_array = array('username' => $user_name);
	$user_data = $db->query("SELECT user_name FROM tbl_user WHERE user_name = :username", $user_select_array);

	if ($user_data) {
		$errorMessage = "Username already exist.!";
	}
	else{
		if ($password == $password_confirm) {
			$user_adding_array = array('fullname' => $full_name, 'username' => $user_name, 'password' => $password, 'usertype' => $user_type );
			$user_adding_sql = $db->query("INSERT INTO tbl_user (user_name, password, users_name, user_type) VALUES (:username, :password, :fullname, :usertype)",$user_adding_array);

			if ($user_adding_sql) {
				$successMessage = "New user added succesfully";
				setcookie("cookieCourseSuccessMessage", $successMessage, time() + (5 * 1), "/");
				header("Location:".ADMIN_PATH."users");
			}
			else {
				$errorMessage = "Error in adding user. Please try again.!";
			}
		}
		else{
			$errorMessage = "Password doesn't match in both fields.!";
		}
	}
}

$include_file = DOC_ROOT.'esol-backend/pages/add-user-page.php';
include DOC_ROOT.'esol-backend/template.php';

?>
<script>
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


