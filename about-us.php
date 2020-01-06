<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';
require_once DOC_ROOT.'functions.php';

$theid = "";

if ((isset($_GET['id'])) && ($_GET['id'] != "about-us")) {
	$theid = filter_var($_GET['id']);
	$get_branch_id_array = array('branch_name' => $theid);
	$get_branch_id_query = $db->query("SELECT branch_id, branch_name FROM tbl_branch WHERE branch_name = :branch_name", $get_branch_id_array);

	if ($get_branch_id_query) {
		for ($x=0; $x < count($get_branch_id_query); $x++) { 
			$branch_id = $get_branch_id_query[$x]['branch_id'];
			$branch_selected = $get_branch_id_query[$x]['branch_name'];
		}
		$get_active_teachers_array = array('branch_id' => $branch_id, 'active_status' => "1");
		$get_active_teachers_query = $db->query("SELECT Name, idTeacher FROM teacher WHERE branch_id = :branch_id AND teacher_status = :active_status", $get_active_teachers_array);
	}
	else {
		/*$branch_id = $get_branch_id_query[$x]['branch_id'];*/
		$branch_selected = "About Us";
	}
	if ($_GET['id'] == "international-teachers") {
		$branch_selected = "International Teachers";
	}
}
else {
	$branch_selected = "About Us";
}


$getallbranches = $db->query("SELECT * FROM tbl_branch");
$the_days = get_all_days();

$include_file = DOC_ROOT.'pages/about_us_pages.php';
include DOC_ROOT.'template.php';
?>
<script>
<?php if ($theid != 'about') {?>
	$('html, body').animate({
        scrollTop: $("#about-content").offset().top
    }, 1200);

<?php }?>

</script>