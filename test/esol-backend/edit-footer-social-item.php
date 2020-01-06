<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
// $slider_data = $db->query("SELECT * FROM tbl_footer_social_link");
if (isset($_GET['socialid'])) {
      $id = filter_var($_GET['socialid'], FILTER_SANITIZE_STRING);
      $social_array = array('id' => $id);
      $sql_social = $db->query("SELECT * FROM tbl_footer_social_link WHERE social_id = :id", $social_array);

      for ($i=0; $i < count($sql_social); $i++) { 
      	$sid = $sql_social[$i]['social_id'];
      	$sname = $sql_social[$i]['social_name'];
      	$slink = $sql_social[$i]['social_link'];
      	$icon = $sql_social[$i]['social_icon'];
      }

      if (isset($_POST['btn-update'])) {

      	$sname = filter_var($_POST['sname']);
      	$slink = filter_var($_POST['slink']);
      	$social_array = array('sid' => $sid, 'sname' => $sname, 'slink' => $slink);
      	$sql_social = $db->query("UPDATE tbl_footer_social_link SET social_name = :sname, social_link = :slink WHERE social_id = :sid", $social_array);

      
  

      	if ($sql_social) {
			$successMessage = "Social details updated successfully.!";
			setcookie("cookieSocialSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-social");
		}
		else{
			$errorMessage = "Same contents replaced";
			setcookie("cookieSocialErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."edit-footer-social");
		}

      }

}


$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-social-item-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>