<?php
include_once ('top.php');

if (!isset($_SESSION['studentid'])) {
	session_destroy();
	header("Location:".HTTP_PATH."library-login");
}
else{
	session_destroy();
	header("Location:".HTTP_PATH."library-login");
}
?>