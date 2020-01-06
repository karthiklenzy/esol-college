<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';

$book_catagory_data = $db->query("SELECT * FROM tbl_book_category");

if (isset($_POST['btn-add-book'])) {
	$book_category = filter_var($_POST['book_category'], FILTER_SANITIZE_STRING);
	$book_name = filter_var($_POST['bookheading'], FILTER_SANITIZE_STRING);

	/* ************ Making the URL PDF ************* */
	  $url_for_pdf = $book_name;
      //Lower case everything
      $url_for_pdf = strtolower($url_for_pdf);
      //Make alphanumeric (removes all other characters)
      $url_for_pdf = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_pdf);
      //Clean up multiple dashes or whitespaces
      $url_for_pdf = preg_replace("/[\s-]+/", " ", $url_for_pdf);
      //Convert whitespaces and underscore to dash
      $url_for_pdf = preg_replace("/[\s_]/", "-", $url_for_pdf);

  	/* ************ Making the URL PDF ************* */
    /* ********************************  PDF UPLOAD ****************************** */
        $pdf_path = "uploads/images/books/"; // Upload directory
        include DOC_ROOT.'esol-backend/includes/pdf_upload.php'; 
    /* ********************************  //PDF UPLOAD ****************************** */
	   /* ************ Making the URL IMAGE************* */
    $url_for_image = $book_name;
      //Lower case everything
      $url_for_image = strtolower($url_for_image);
      //Make alphanumeric (removes all other characters)
      $url_for_image = preg_replace("/[^a-z0-9_\s-]/", "", $url_for_image);
      //Clean up multiple dashes or whitespaces
      $url_for_image = preg_replace("/[\s-]+/", " ", $url_for_image);
      //Convert whitespaces and underscore to dash
      $url_for_image = preg_replace("/[\s_]/", "-", $url_for_image);

    /* ************ Making the URL IMAGE************* */

	/* ********************************  image UPLOAD ****************************** */
        $path = "uploads/images/books_images/"; // Upload directory
        include DOC_ROOT.'esol-backend/includes/image-upload.php'; 
    /* ********************************  //image UPLOAD ****************************** */

  	if ($uploadOk == 1) { 
  		$array_pdf = array('book_cat' => $book_category, 'book_name' => $book_name, 'pdf_url' => $pdf_path, 'img_url' => $path);
  		$pdf_query = $db->query("INSERT INTO tbl_lib_books (book_cat_id, lib_book_name, lib_book_url, lib_book_image_url) VALUES (:book_cat, :book_name, :pdf_url, :img_url)",$array_pdf);
  		if ($pdf_query) {
  			$successMessage = "Book added successfully.!";
			setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."library");
  		}
  		else {
  			$successMessage = "Error adding book.!";
			setcookie("cookieErrorMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
			header("Location:".ADMIN_PATH."add-library-book");
  		}
  	}
  	else{
		$errorMessage = "Error in pdf upload";
		setcookie("cookieErrorMessage", $errorMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."add-library-book");
	}
}


$include_file = DOC_ROOT.'esol-backend/pages/add-library-book-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>