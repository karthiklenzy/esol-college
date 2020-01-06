<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";


$student_data = $db->query("SELECT * FROM tbl_admission_child ORDER BY parent_id DESC");

$include_file = DOC_ROOT.'esol-backend/pages/admission-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>