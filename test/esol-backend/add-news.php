<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

$number_of_slides = 0;
$slider_data = $db->query("SELECT * FROM tbl_news");
if (isset($_POST['btn-add'])) {
	$heading = filter_var($_POST['newsheading'], FILTER_SANITIZE_STRING);
	$description = filter_var($_POST['newsdescription'], FILTER_SANITIZE_STRING);
	$location = filter_var($_POST['newslocation']);
	// $type = filter_var($_POST['radionewstype'], FILTER_SANITIZE_STRING);
	$time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
	$date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);

	$get_last_id = $db->query("SELECT MAX(news_id) FROM tbl_news");
	if ($get_last_id) {
		$prev_id =  $get_last_id[0]["MAX(news_id)"];
		$prev_id++;
	}
	else{
		$prev_id = 1;
	}
	
	/* ************ Making the URL ************* */
	  $url_for_image = $heading;
      //Lower case everything
      $url_for_image = strtolower($url_for_image);
      //Make alphanumeric (removes all other characters)
      $url_for_image = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_image);
      //Clean up multiple dashes or whitespaces
      $url_for_image = preg_replace("/[\s-]+/", " ", $url_for_image);
      //Convert whitespaces and underscore to dash
      $url_for_image = preg_replace("/[\s_]/", "-", $url_for_image);

  	/* ************ Making the URL ************* */
  		$news_url = $prev_id.'-'.$url_for_image;
	
	/* ********************************  IMAGE UPLOAD ****************************** */
        $path = "uploads/images/news/"; // Upload directory
        include DOC_ROOT.'esol-backend/includes/image-upload.php'; 
  	/* ********************************  //IMAGE UPLOAD ****************************** */
  if ($uploadOk == 1) {

	$news_array = array('heading' => $heading, 'newsurl' => $news_url, 'descr' => $description, 'location' => $location, 'img_path' => $path, 'timee' => $time, 'datee' => $date);

	$sql_news = $db->query("INSERT INTO tbl_news (news_heading, news_url, news_description, news_image, news_location, news_time, news_date) VALUES (:heading, :newsurl, :descr, :img_path, :location, :timee, :datee)",$news_array);

			if ($sql_news) {
				$successMessage = "News added successfully.!";
					setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
					header("Location:".ADMIN_PATH."news");
			}
			else {

				$successMessage = "Error in adding news.!";
					setcookie("cookieErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
					header("Location:".ADMIN_PATH."news");
			}
   }
  
  else {
		  	$successMessage = "Error in uploading news image.!";
			setcookie("cookieErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."news");
       }

}




$include_file = DOC_ROOT.'esol-backend/pages/add-news-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>