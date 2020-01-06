<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'functions.php';

$calendar_data = $db->query("SELECT * FROM tbl_calendar WHERE calendar_date >= CURDATE() ORDER BY calendar_date ASC");
$semester_calendar_data = $db->query("SELECT * FROM tbl_sem_calendar");
$semester_alert_data = $db->query("SELECT * FROM tbl_calendar_alert ORDER BY calendar_alert_id DESC LIMIT 3");
$include_file = DOC_ROOT.'pages/intake_calendar_pages.php';
include DOC_ROOT.'template.php';
?>