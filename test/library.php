<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
include_once DOC_ROOT.'includes/auth.php';

include DOC_ROOT.'includes/library-head.php';
include DOC_ROOT.'includes/menu.php';

$category_name = $db->query("SELECT book_cat_name, book_cat_id FROM tbl_book_category");
$book_name = $db->query("SELECT lib_book_name, book_cat_id, lib_book_url FROM tbl_lib_books");

if (isset($_GET['cat_id'])) {
	$category_id = filter_var($_GET['cat_id']);
}
else{
	$category_id = 1;
}
include DOC_ROOT.'pages/library_pages.php';
include DOC_ROOT.'includes/library-footer.php';
?>