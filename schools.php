<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'functions.php';

if (isset($_GET['courseurl'])) {
	$courseurl = filter_var($_GET['courseurl'], FILTER_SANITIZE_STRING);
	$getcoursedetails_array = array('courseurl' => $courseurl);

	$course_data = $db->query("SELECT * FROM tbl_courses WHERE course_url = :courseurl", $getcoursedetails_array);	
}
else{
	$course_data = $db->query("SELECT * FROM tbl_courses ORDER BY course_id ASC limit 1");
}

$course_names = $db->query("SELECT course_name, course_url FROM tbl_courses WHERE course_status = 0 ORDER BY course_id ASC");

$include_file = DOC_ROOT.'pages/schools_pages.php';
include DOC_ROOT.'template.php';

if (isset($_GET['courseurl'])) {
?>
<script>
$('html, body').animate({
        scrollTop: $("#course-content").offset().top
    }, 2000);
</script>
<?php } ?>