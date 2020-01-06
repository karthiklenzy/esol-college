<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
// $slider_data = $db->query("SELECT * FROM tbl_main_menu");

if (isset($_GET['linkid'])) {
	$link_id = filter_var($_GET['linkid']);
	$link_array = array('linkid' => $link_id);
    $link_display = $db->query("SELECT * FROM tbl_main_menu WHERE main_menu_id = :linkid", $link_array);
	
	if ($link_display) {


		for ($i=0; $i < count($link_display); $i++) { 
			$menu_name = $link_display[$i]['main_menu_name'];
			$menu_link = $link_display[$i]['main_menu_link'];
			$menu_id = $link_display[$i]['main_menu_id'];
		}

		if (isset($_POST['btn-update'])) {
				$menu_id = filter_var($_POST['menuid'], FILTER_SANITIZE_STRING);
				$menu_name = filter_var($_POST['menuname'], FILTER_SANITIZE_STRING);
				$menu_link = filter_var($_POST['menulink'], FILTER_SANITIZE_STRING);
				$array_update = array('menuid' => $menu_id, 'menuname' => $menu_name, 'menulink' => $menu_link);
				$query_update = $db->query("UPDATE tbl_main_menu SET main_menu_name = :menuname, main_menu_link = :menulink WHERE main_menu_id = :menuid", $array_update);
				


							if ($query_update) {
								$successMessage = "Slider details updated successfully.!";
								setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
								header("Location:".ADMIN_PATH."edit-menu");
												}
							else {
								$errorMessage = "Same contents replaced";
								setcookie("cookieSliderInfoMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
								header("Location:".ADMIN_PATH."edit-menu");
								}
				
	}
	}

		        
}
else {
	$errorMessage = "Menu id not found";
	setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
	header("Location:".ADMIN_PATH."edit-menu");
}

$include_file = DOC_ROOT.'esol-backend/pages/edit-menu-item-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>