<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';

$slider_data = $db->query("SELECT * FROM tbl_main_menu");

if (isset($_POST['btn-save'])) {
	$menu_name = filter_var($_POST['menuname'], FILTER_SANITIZE_STRING);
	$menu_link = filter_var($_POST['menulink'], FILTER_SANITIZE_STRING);
	$add_array = array('menuname' => $menu_name, 'menulink' => $menu_link);
	$add_query = $db->query("INSERT INTO tbl_main_menu (main_menu_name, main_menu_link) VALUES (:menuname, :menulink)",$add_array);
	if ($add_query) {
			$successMessage = "Menu added successfully.!";
			setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-menu");
		}
		else{
			$errorMessage = "Error in adding the menu";
			setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-menu");
		}
}


$include_file = DOC_ROOT.'esol-backend/pages/add-menu-link-page.php';
include DOC_ROOT.'esol-backend/template.php';


?>