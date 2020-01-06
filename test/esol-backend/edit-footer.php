<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

// $slider_data = 0;
$sql = $db->query("SELECT * FROM tbl_footer_menu");

		
// Delete slider 


$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>