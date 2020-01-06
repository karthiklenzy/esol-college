<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";


/*  Pagination Settings  */
$num_rec_per_page = 18;
$limit_from = 0;
$showmaxpagelimit = 5;
$showminpagelimit = 0;
$current_page_number = 1;

	if (isset($_GET['currentpage'])) {  
		$current_page_number = $_GET['currentpage'];
		if ($current_page_number != 1) {
			$previous_page = $current_page_number-1;
			$limit_from = $previous_page*$num_rec_per_page;
			$showmaxpagelimit = $current_page_number + 3;
			$showminpagelimit = $current_page_number - 3;
		}
		
	}

	/*  //Pagination Settings  */
	
	$child_data_count = $db->query("SELECT count(inquiry_id) FROM tbl_inquiry");

	$total_child = $child_data_count[0]['count(inquiry_id)'];
		$total_pages = $total_child / $num_rec_per_page;
		$total_pages = ceil($total_pages); //convert to highest full number
	$inquiry_sql = $db->query("SELECT * FROM tbl_inquiry ORDER BY inquiry_id DESC");


	

$include_file = DOC_ROOT.'esol-backend/pages/inquiry-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>