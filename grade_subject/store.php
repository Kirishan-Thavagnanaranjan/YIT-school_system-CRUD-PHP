<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$grade_id = $_POST['id'];
	$subjects_id = $_POST['subjects_id'];
	require_once('../config.php');



	foreach ($subjects_id as $subject_id) {
		$query = "INSERT INTO grade_subject(grade_id,subject_id) VALUES ('$grade_id','$subject_id')";
		$results = mysqli_query($conn, $query);

		if (!$results) {
			echo mysqli_error($conn);
		} else {
			echo "query excuted";
		}
	}
	header("Location: ../?section=grades&page=addsubject&id=$grade_id");
}
