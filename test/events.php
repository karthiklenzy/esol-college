<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';

$pagination_url = "";

/*  Pagination Settings  */
$num_rec_per_page = 12;
$limit_from = 0;
$showmaxpagelimit = 5;
$showminpagelimit = 0;
$cuttent_page_number = 1;

if (isset($_GET['currentpage'])) {  
	$cuttent_page_number = $_GET['currentpage'];
	if ($cuttent_page_number != 1) {
		$previous_page = $cuttent_page_number-1;
		$limit_from = $previous_page*$num_rec_per_page;
		$showmaxpagelimit = $cuttent_page_number + 3;
		$showminpagelimit = $cuttent_page_number - 3;
	}
	
}
/*  //Pagination Settings  */

if (isset($_GET['eventtitle'])) {
	$eventid = filter_var($_GET['eventid']);
	$eventurl = filter_var($_GET['eventtitle']);

	$pagination_url = "?eventtitle=".$eventurl."&eventid=".$eventid;

	$getallpics_array = array('eventid' => $eventid);
	$getallpics_count_query = $db->query("SELECT COUNT(image_id) FROM tbl_events_image WHERE event_id = :eventid", $getallpics_array);

	$total_images = $getallpics_count_query[0]['COUNT(image_id)'];
	$total_pages = $total_images / $num_rec_per_page;
	$total_pages = ceil($total_pages); //convert to highest full number

	$getallpics_query = $db->query("SELECT tbl_events_image.*, tbl_events.event_name FROM tbl_events_image INNER JOIN tbl_events WHERE tbl_events_image.event_id = :eventid AND tbl_events_image.event_id = tbl_events.event_id limit $limit_from, $num_rec_per_page", $getallpics_array);
}
else{
	$getlatestalbumid = $db->query("SELECT MAX(event_id) FROM tbl_events_image");
	if ($getlatestalbumid) {
		$eventid = $getlatestalbumid[0]['MAX(event_id)'];

		$getallpics_array = array('eventid' => $eventid);
		$getallpics_count_query = $db->query("SELECT COUNT(image_id) FROM tbl_events_image WHERE event_id = :eventid", $getallpics_array);

		$total_images = $getallpics_count_query[0]['COUNT(image_id)'];
		$total_pages = $total_images / $num_rec_per_page;
		$total_pages = ceil($total_pages); //convert to highest full number

		$getallpics_query = $db->query("SELECT tbl_events_image.*, tbl_events.event_name FROM tbl_events_image INNER JOIN tbl_events WHERE tbl_events_image.event_id = :eventid AND tbl_events_image.event_id = tbl_events.event_id limit $limit_from, $num_rec_per_page", $getallpics_array);
	}
}

$event_data = $db->query("SELECT event_id, event_name, event_url FROM tbl_events ORDER BY event_id DESC");

$include_file = DOC_ROOT.'pages/events_pages.php';
include DOC_ROOT.'template.php';

if (isset($_GET['eventtitle'])) {
?>
<script>
$('html, body').animate({
        scrollTop: $("#event-content").offset().top
    }, 2000);
</script>
<?php } ?>