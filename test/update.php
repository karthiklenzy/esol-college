<?php
include_once ('top.php');
include_once DOC_ROOT.'classes/db_connection.php';
include_once DOC_ROOT.'functions.php';

$file = 'teachers.csv';
$handle = fopen($file, "r");

while(($filesop = fgetcsv($handle, 1000, ",")) !== false){
	$teacher_name = $filesop[1];
	$teacher_category = $filesop[3];
	$teacher_branch_id = $filesop[5];
	$teacher_status = $filesop[6];

	$add_teacher_array = array('teacher_name' => $teacher_name, 'teacher_category' => $teacher_category, 'teacher_branch_id' => $teacher_branch_id, 'teacher_status' => $teacher_status);
	/*$add_teacher_query = $db->query("INSERT INTO teacher (Name, teacher_status, teacher_cat_id, branch_id) VALUES (:teacher_name, :teacher_status, :teacher_category, :teacher_branch_id)", $add_teacher_array);*/
}
?>