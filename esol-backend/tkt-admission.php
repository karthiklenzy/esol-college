<?php
include '../top.php';
require_once DOC_ROOT.'classes/db_connection.php';
// include_once DOC_ROOT."esol-backend/includes/auth.php";

/*  Pagination Settings  */
$num_rec_per_page = 15;
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
	
	$child_data_count = $db->query("SELECT count(student_id) FROM tbl_admission_tkt");

	$total_child = $child_data_count[0]['count(student_id)'];
		$total_pages = $total_child / $num_rec_per_page;
		$total_pages = ceil($total_pages); //convert to highest full number	

	// $news_data = $db->query("SELECT * FROM tbl_admission ORDER BY parent_id DESC limit $limit_from, $num_rec_per_page");
	$student_data = $db->query("SELECT * FROM tbl_admission_tkt ORDER BY reg_date DESC limit $limit_from, $num_rec_per_page");

	if (isset($_GET['studentid'])) {
		$parent_array = array('studentid' => $_GET['studentid']);
		

		$data = $db->query("SELECT * FROM tbl_admission_tkt WHERE student_id = :studentid ORDER BY reg_date DESC", $parent_array);

		include_once DOC_ROOT.'esol-backend/includes/export.php';
		
	}

$include_file = DOC_ROOT.'esol-backend/pages/tkt-admission-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>