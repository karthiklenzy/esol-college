<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
$number_of_slides = 0;
$slider_data = $db->query("SELECT * FROM tbl_slider");
// include_once DOC_ROOT."esol-backend/includes/auth.php";
if (isset($_POST['btn-save'])) {
	$slidername = filter_var($_POST['txtslidername'], FILTER_SANITIZE_STRING);
	$sliderheadingone = filter_var($_POST['txtsliderheading1'], FILTER_SANITIZE_STRING);
	$sliderheadingtwo = filter_var($_POST['txtsliderheading2'], FILTER_SANITIZE_STRING);

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
	
	/* ********************************  IMAGE UPLOAD ****************************** */
        $path = "uploads/images/slider/"; // Upload directory
        include DOC_ROOT.'esol-backend/includes/image-upload.php'; 
  	/* ********************************  //IMAGE UPLOAD ****************************** */

  	if ($uploadOk == 1) {
  		$addingdetails = array('slider_name' => $slidername, 'slider_heading_one' => $sliderheadingone, 'slider_heading_two' => $sliderheadingtwo, 'slider_main_img' => $path); 
		$addingdetailsresult = $db->query("INSERT INTO tbl_slider (slider_name, slider_heading_one, slider_heading_two, slider_main_img) VALUES (:slider_name, :slider_heading_one, :slider_heading_two, :slider_main_img)",$addingdetails);

		if ($addingdetailsresult) {
			$successMessage = "Slider added successfully.!";
			setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."sliders");
		}
		else{
			$errorMessage = "Error in adding the slider";
			setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."sliders");
		}
  	}
  	else{
		$errorMessage = "Error in image upload";
		setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."sliders");
	}
    
}
$include_file = DOC_ROOT.'esol-backend/pages/add-slider-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>