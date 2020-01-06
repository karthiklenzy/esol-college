<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

if ((isset($_GET['newsid'])) && (isset($_GET['newsname']))) {
	$newsid = filter_var($_GET['newsid']);
	$newsname = filter_var($_GET['newsname']);

	/* ************ Making the URL ************* */
	  $url_for_image = $newsname;
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
		$path = "uploads/images/news/"; // Upload directory
	    include DOC_ROOT.'esol-backend/includes/image-upload.php'; 

	    if ($uploadOk == 1) {
	    	$updatenewsimage_array = array('newsid' => $newsid, 'imagepath' => $path);
	    	$updatenewsimage_query = $db->query("UPDATE tbl_news SET news_image = :imagepath WHERE news_id = :newsid", $updatenewsimage_array);

	    	if ($updatenewsimage_query) {
	    		header("Location:".ADMIN_PATH."edit-news?newsid=".$newsid);
	    	}
	    	else{
	    		$errorMessage = "Image upload unavailable";
		        setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); 
		        header("Location:".ADMIN_PATH."news");
	    	}
	    }
	    else{
	    	$errorMessage = "Error uploading image";
	        setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); 
	        header("Location:".ADMIN_PATH."news");
	    }
	}
}
else{
	$errorMessage = "Image upload unavailable";
    setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/");
    header("Location:".ADMIN_PATH."edit-news");
}

$include_file = DOC_ROOT.'esol-backend/pages/news-image-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>