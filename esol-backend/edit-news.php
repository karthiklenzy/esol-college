<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $number_of_slides = 0;
// $slider_data = $db->query("SELECT * FROM tbl_news");
if (isset($_GET['newsid'])) {
	$news_id = filter_var($_GET['newsid'], FILTER_SANITIZE_STRING);
    $news_array = array('id' => $news_id);
	$news_data = $db->query("SELECT * FROM tbl_news WHERE news_id = :id", $news_array);

	if ($news_data) {
		for ($i=0; $i < count($news_data); $i++) { 
            $newsid = $news_data[$i]['news_id'];
            $heading = $news_data[$i]['news_heading'];
            $desc = $news_data[$i]['news_description'];
            $news_image = $news_data[$i]['news_image'];
            $location = $news_data[$i]['news_location'];
            // $type = $news_data[$i]['news_type'];
            $time = $news_data[$i]['news_time'];
            $date = $news_data[$i]['news_date'];
        }
	}
    if (isset($_POST['btn-update'])) {       
       $news_heading = filter_var($_POST['newsheading']);
       $news_description = filter_var($_POST['newsdescription']);
       $news_location = filter_var($_POST['newslocation']);
       // $news_type = filter_var($_POST['radionewstype']);
       $news_time = filter_var($_POST['time']);
       $news_date = filter_var($_POST['datepicker']);

        $url_for_image = $news_heading;
        //Lower case everything
        $url_for_image = strtolower($url_for_image);
        //Make alphanumeric (removes all other characters)
        $url_for_image = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_image);
        //Clean up multiple dashes or whitespaces
        $url_for_image = preg_replace("/[\s-]+/", " ", $url_for_image);
        //Convert whitespaces and underscore to dash
        $url_for_image = preg_replace("/[\s_]/", "-", $url_for_image);


        if (empty($_FILES['files']['name'])) {
            $news_array = array('id' => $newsid,'head' => $news_heading, 'des' => $news_description, 'loc' => $news_location, 'tim' => $news_time, 'dat' => $news_date);
           $news_sql = $db->query("UPDATE tbl_news SET news_heading = :head, news_description = :des, news_location = :loc, news_time = :tim, news_date = :dat WHERE news_id = :id",$news_array);

           if ($news_sql) {
               $successMessage = "News updated successfully.!";
                setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
                header("Location:".ADMIN_PATH."news");
           }
           else {
            $successMessage = "Contents were not changed to update.!";
                setcookie("cookieInfoMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
                header("Location:".ADMIN_PATH."news");
           }
        }
        else{
            $path = "uploads/images/news/"; // Upload directory
            include DOC_ROOT.'esol-backend/includes/image-upload.php';

            if ($uploadOk == 1) {
               $news_array = array('id' => $newsid,'head' => $news_heading, 'des' => $news_description, 'loc' => $news_location, 'tim' => $news_time, 'dat' => $news_date, 'newsimage' => $path);
               $news_sql = $db->query("UPDATE tbl_news SET news_heading = :head, news_description = :des, news_location = :loc, news_time = :tim, news_date = :dat, news_image = :newsimage WHERE news_id = :id",$news_array);

               if ($news_sql) {
                   $successMessage = "News updated successfully.!";
                    setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
                    header("Location:".ADMIN_PATH."news");
               }
               else {
                $successMessage = "Error on updating news.!";
                    setcookie("cookieErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
                    header("Location:".ADMIN_PATH."news");
               }
            }
        }
    }
}




$include_file = DOC_ROOT.'esol-backend/pages/edit-news-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>