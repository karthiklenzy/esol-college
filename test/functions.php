<?php
function getbranchname($branchID){
	global $db;
	
	if($branchID == 999){
		$the_branch_name = "All Branches";
	}
	else{
		$getbranchArray = array("brID"=> $branchID);
		$select_br = $db->query("SELECT * FROM tbl_branch WHERE branch_id = :brID", $getbranchArray);
		$the_branch_name = $select_br[0]['branch_name'];
	}
	
	return $the_branch_name;
}

function get_all_days(){
	$all_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday M', 'Saturday A', 'Saturday E');
	return $all_days;
}

function getTeacherNamebyId($teacherId){
	global $db;

	if($teacherId == 0){
		$teacher_name = 'N/A';
	}
	else{
		$getTeacherNameArray = array("teacherId"=> $teacherId);
		$select_teacher_name = $db->query("SELECT Name FROM teacher WHERE idTeacher = :teacherId", $getTeacherNameArray);
		$teacher_name = $select_teacher_name[0]['Name'];
	}	
	return $teacher_name;
}

function getteachercategory($catid){
	if ($catid == 1) {
		$category = "Primary";
	}
	else if ($catid == 2) {
		$category = "Intermediate";
	}
	else if ($catid == 3) {
		$category = "Upper";
	}
	else if ($catid == 4) {
		$category = "Trainee";
	}
	else{
		$category = "N/A";
	}

	return $category;
}
?>