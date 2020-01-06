<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";
$book_catagory = $db->query("SELECT * FROM tbl_book_category");



$include_file = DOC_ROOT.'esol-backend/pages/edit-library-book-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>