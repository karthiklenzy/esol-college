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
	
	$child_data_count = $db->query("SELECT count(parent_id) FROM tbl_admission");
	$child_count = $db->query("SELECT count(child_id) FROM tbl_admission_child");
	$total_child_display = $child_count[0]['count(child_id)'];

	$total_child = $child_data_count[0]['count(parent_id)'];
		$total_pages = $total_child / $num_rec_per_page;
		$total_pages = ceil($total_pages); //convert to highest full number	

	// $news_data = $db->query("SELECT * FROM tbl_admission ORDER BY parent_id DESC limit $limit_from, $num_rec_per_page");
	$student_data = $db->query("SELECT tbl_admission.parent_id, tbl_admission.branch_name, tbl_admission.parent_name, tbl_admission.parent_mobile, tbl_admission.admission_reference_number, tbl_admission.admission_date, tbl_admission.parent_mail, tbl_admission_child.child_id, tbl_admission_child.child_name, tbl_admission_child.child_dob, tbl_admission_child.child_gender FROM tbl_admission INNER JOIN tbl_admission_child WHERE tbl_admission_child.parent_id = tbl_admission.parent_id ORDER BY tbl_admission.admission_date DESC limit $limit_from, $num_rec_per_page");
    
    if (isset($_GET['parentid'])) {
		$parent_array = array('parent_id' => $_GET['parentid']);
		

		$data = $db->query("SELECT tbl_admission.*, tbl_admission_child.* FROM tbl_admission INNER JOIN tbl_admission_child WHERE tbl_admission_child.parent_id = :parent_id AND tbl_admission.parent_id = tbl_admission_child.parent_id ORDER BY tbl_admission.admission_date DESC", $parent_array);

		include_once DOC_ROOT.'esol-backend/includes/export.php';
		
	}
    
$include_file = DOC_ROOT.'esol-backend/pages/admission-page.php';
include DOC_ROOT.'esol-backend/template.php';
?>