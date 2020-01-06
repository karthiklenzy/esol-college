<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

if ((isset($_GET['slideid'])) && (isset($_GET['slidername']))) {
	$sliderid = filter_var($_GET['slideid']);
	$slidername = filter_var($_GET['slidername']);

	/* ************ Making the URL ************* */
	  $url_for_image = $slidername;
      //Lower case everything
      $url_for_image = strtolower($url_for_image);
      //Make alphanumeric (removes all other characters)
      $url_for_image = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_image);
      //Clean up multiple dashes or whitespaces
      $url_for_image = preg_replace("/[\s-]+/", " ", $url_for_image);
      //Convert whitespaces and underscore to dash
      $url_for_image = preg_replace("/[\s_]/", "-", $url_for_image);

  	/* ************ Making the URL ************* */

	if (isset($_POST['btn-upload'])) {
		$path = "uploads/images/slider/"; // Upload directory
	    include DOC_ROOT.'esol-backend/includes/image-upload.php'; 

	    if ($uploadOk == 1) {
	    	$updatesliderimage_array = array('sliderid' => $sliderid, 'imagepath' => $path);
	    	$updatesliderimage_query = $db->query("UPDATE tbl_slider SET slider_main_img = :imagepath WHERE slider_id = :sliderid", $updatesliderimage_array);

	    	if ($updatesliderimage_query) {
	    		header("Location:".ADMIN_PATH."edit-slider?sliderid=".$sliderid);
	    	}
	    	else{
	    		$errorMessage = "Image upload unavailable";
		        setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		        header("Location:".ADMIN_PATH."sliders");
	    	}
	    }
	    else{
	    	$errorMessage = "Error uploading image";
	        setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
	        header("Location:".ADMIN_PATH."sliders");
	    }
	}
}
else{
	$errorMessage = "Image upload unavailable";
    setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
    header("Location:".ADMIN_PATH."sliders");
}

$include_file = DOC_ROOT.'esol-backend/pages/replace-image-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>