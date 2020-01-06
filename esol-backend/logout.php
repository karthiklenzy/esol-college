<?php
include_once ('../top.php');

if (!isset($_SESSION['user_id'])) {
	session_destroy();
	header("Location:".ADMIN_PATH);
}
else{
	session_destroy();
	header("Location:".ADMIN_PATH);
}
?> 