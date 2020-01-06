<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
$news_data = $db->query("SELECT * FROM tbl_news WHERE news_status = 1  ORDER BY news_id DESC LIMIT 2");

$intake_dates = $db->query("SELECT * FROM tbl_calendar ORDER BY calendar_date DESC LIMIT 3");

$include_file = DOC_ROOT.'pages/index_pages.php';
include DOC_ROOT.'template.php';
?>