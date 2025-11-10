<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$file = $_FILES['myfile'];
	$id = $_POST['id'];
	$father_name = $_POST['father_name'];
	$student_name  = $_POST['student_name'];
	$admission_number = $_POST['admission_number'];
	$grade_id = $_POST['grade_id'];
	$nic = $_POST['nic'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$telephone_number = $_POST['telephone_number'];
	$address = $_POST['address'];

	require_once('../config.php');
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($file['name']);
	$original_file_name = basename($file['name']);

	$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
	$img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


	if (in_array($img_file_type, $allowedTypes)) {
		$size = $file["size"];

		if ($size < 10000000) {

			if (move_uploaded_file($file["tmp_name"], $target_file)) {
				$query = "UPDATE students SET father_name = '$father_name' ,student_name = '$student_name',admission_number = '$admission_number',grade_id = '$grade_id',nic = '$nic',dob='$dob',gender='$gender',telephone_number='$telephone_number',address='$address',image ='$target_file',file_name='$original_file_name' WHERE id ='$id'; ";
				$results = mysqli_query($conn, $query);

				if (!$results) {
					echo mysqli_error($conn);
				}
				header("Location: index.php");
				exit;
			} else {
				echo "profile image Upload Failed!";
			}
		} else {
			echo "Over profile image size..";
		}
	} else {
		echo " Upload profile Only allowed file types";
	}
}
