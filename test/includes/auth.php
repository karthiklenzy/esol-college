<?php 
if (!isset($_SESSION['studentid'])) {
	header("Location:".HTTP_PATH."library-login");
}
else {
	$checkStudentLoginArray = array('studentid' => $_SESSION['studentid']);
	$checkstudentLogin = $db->query("SELECT * FROM tbl_student WHERE student_id = :studentid", $checkStudentLoginArray);

	if ($checkstudentLogin) {
		for ($i=0; $i < count($checkstudentLogin); $i++) { 
			$_SESSION['studentid'] = $checkstudentLogin[$i]['student_id'];
			$_SESSION['student_name'] = $checkstudentLogin[$i]['student_name'];
			$_SESSION['student_level'] = $checkstudentLogin[$i]['student_level'];
			$_SESSION['student_email'] = $checkstudentLogin[$i]['student_email'];
			$_SESSION['student_password'] = $checkstudentLogin[$i]['student_password'];
			
		}
		// header("Location:".HTTP_PATH."library");
	}
	else {
		session_destroy();
		header("Location:".HTTP_PATH."library-login");
	}
}
?>