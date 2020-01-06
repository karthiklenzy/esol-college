<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";


$book_data = $db->query("SELECT * FROM tbl_lib_books");

// book delete code
if (isset($_GET['bookdeleteid'])) {
	$book_id = filter_var($_GET['bookdeleteid']);
	$book_delete_query = array('book_id' => $book_id);
	$book_sql = $db->query("DELETE FROM tbl_lib_books WHERE lib_book_id = :book_id",$book_delete_query);

	if ($book_sql) {
		$successMessage = "Deleted successfully.!";
		setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."library");
	}
	else {
		$successMessage = "Error in deleting book.!";
		setcookie("cookieSuccessMessage", $successMessage, time() + (20 * 1), "/"); // 1 minute
		header("Location:".ADMIN_PATH."library");
	}

	
}
if (isset($_GET['cat_id'])) {
	$category_id = filter_var($_GET['cat_id'], FILTER_SANITIZE_STRING);
	$cat_array = array('catid' => $category_id);
	$cat_query = $db->query("SELECT book_cat_name FROM tbl_book_category WHERE book_cat_id = :catid",$cat_array);
	
}




$include_file = DOC_ROOT.'esol-backend/pages/library-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>