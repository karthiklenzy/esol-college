<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'functions.php';

$num_rec_per_page = 10;
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
$staff_data_array = array('activestatus' => "1");
$staff_data_count = $db->query("SELECT count(batch_id) FROM tbl_batch WHERE batch_status = :activestatus", $staff_data_array);

	$total_batch = $staff_data_count[0]['count(batch_id)'];
	$total_pages = $total_batch / $num_rec_per_page;
	$total_pages = ceil($total_pages); //convert to highest full number

$staff_data_list = $db->query("SELECT * FROM tbl_batch WHERE batch_status = :activestatus ORDER BY batch_id DESC limit $limit_from, $num_rec_per_page", $staff_data_array);

$include_file = DOC_ROOT.'esol-backend/pages/staff-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>