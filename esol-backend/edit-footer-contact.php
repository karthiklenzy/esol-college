<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
$slider_data = $db->query("SELECT * FROM tbl_footer_contact_links");


$include_file = DOC_ROOT.'esol-backend/pages/edit-footer-contact-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>