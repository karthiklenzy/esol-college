<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// $number_of_slides = 0;
if (isset($_GET['newsurl'])) {
	
	$newsurl = filter_var($_GET['newsurl']);
	$news_array = array('newsurl' => $newsurl);
	$news_data = $db->query("SELECT * FROM tbl_news WHERE news_url = :newsurl",$news_array);

}

$include_file = DOC_ROOT.'pages/read-more-page.php';
include DOC_ROOT.'template.php';

if (isset($_GET['newsurl'])) {
?>
<script>
$('html, body').animate({
        scrollTop: $("#more-content").offset().top
    }, 2000);
</script>
<?php } ?>