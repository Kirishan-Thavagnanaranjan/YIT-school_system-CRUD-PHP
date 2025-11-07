<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$student_id = $_POST['id'];
	$subjects_id = $_POST['subjects_id'];


	require_once('../config.php');
	foreach ($subjects_id as $subject_id) {
		$check_query = "SELECT * FROM student_subject WHERE student_id = '$student_id' AND subject_id = '$subject_id' ;";
		$check = mysqli_query($conn,$check_query);
		$row = mysqli_num_rows($check);

		if($row == 0){

		$query = "INSERT INTO student_subject(student_id,subject_id) VALUES ('$student_id','$subject_id')";
		$results = mysqli_query($conn, $query);

		if (!$results) {
			echo mysqli_error($conn);
		} else {
			echo "query excuted";
		}
	}
	}
	header("Location: ../students/addsubject.php?id=$student_id");
}
