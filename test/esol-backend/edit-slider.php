<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// $number_of_slides = 0;
if (isset($_GET['sliderid'])) {
	$sid = filter_var($_GET['sliderid']);
	$slider_array = array('slideid' => $sid);
	$slider_edit = $db->query("SELECT * FROM tbl_slider WHERE slider_id = :slideid", $slider_array);

	if ($slider_edit) {
		for ($i=0; $i < count($slider_edit); $i++) { 
			$slider_name = $slider_edit[$i]['slider_name'];
			$slider_heading_one = $slider_edit[$i]['slider_heading_one'];
			$slider_heading_two = $slider_edit[$i]['slider_heading_two'];
			$slider_image = $slider_edit[$i]['slider_main_img'];
		}
	}

	if (isset($_POST['btn-update'])) {
		$slide_name = filter_var($_POST['txtslidername'], FILTER_SANITIZE_STRING);
		$slide_heading_one = filter_var($_POST['txtsliderheading1'], FILTER_SANITIZE_STRING);
		$slide_heading_two = filter_var($_POST['txtsliderheading2'], FILTER_SANITIZE_STRING);

		$slide_update = array('slidername' => $slide_name, 'sliderheading1' => $slide_heading_one, 'sliderheading2' => $slide_heading_two, 'sliderid' => $sid);
		$slide_update_query = $db->query("UPDATE tbl_slider SET slider_name = :slidername, slider_heading_one = :sliderheading1, slider_heading_two = :sliderheading2 WHERE slider_id = :sliderid", $slide_update);

		if ($slide_update_query) {
			$successMessage = "Slider details updated successfully.!";
			setcookie("cookieSliderSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."sliders");
		}
		else{
			$errorMessage = "Same contents replaced";
			setcookie("cookieSliderInfoMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."sliders");
		}
	}
}
else{
	$errorMessage = "Slider ID not found.!";
	setcookie("cookieSliderErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
	header("Location:".ADMIN_PATH."sliders");
}

$include_file = DOC_ROOT.'esol-backend/pages/edit-slider-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>