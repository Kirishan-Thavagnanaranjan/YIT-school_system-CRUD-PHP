<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
	$path = $_POST['path'];

	require_once('../config.php');
	if (!empty($_FILES['myfile']['name'])) {
		$file = $_FILES['myfile'];
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($file['name']);
		$original_file_name = basename($file['name']);

		$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
		$img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


		if (in_array($img_file_type, $allowedTypes)) {
			$size = $file["size"];

			if ($size < 10000000) {

				if (move_uploaded_file($file["tmp_name"], $target_file)) {
					if (file_exists($path)) {
						unlink($path);
					}
					$query1 = "UPDATE students SET image ='$target_file',file_name='$original_file_name' WHERE id ='$id'; ";
					$results1 = mysqli_query($conn, $query1);

					if (!$results1) {
						echo mysqli_error($conn);
					}
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

	//get exiting students details and check validation

	$fetch_query = "SELECT admission_number,nic FROM students WHERE id != $id;";
	$fetch_results = mysqli_query($conn, $fetch_query);
	$fetch_addmission_number = [];
	$fetch_nic = [];
	while ($row = mysqli_fetch_assoc($fetch_results)) {
		$fetch_addmission_number[] = $row["admission_number"];
		$fetch_nic[] = $row["nic"];
	}

	if (in_array($admission_number, $fetch_addmission_number) && in_array($nic, $fetch_nic)) { ?>
		<script>
			alert("Admission number and NIC are already exited!");
			window.history.back();
		</script>
	<?php
	} else if (in_array($admission_number, $fetch_addmission_number)) { ?>
		<script>
			alert("Addmission number is already exited!");
			window.history.back();
		</script>
	<?php
	} else if (in_array($nic, $fetch_nic)) { ?>
		<script>
			alert("NIC number is already exited!");
			window.history.back();
		</script>
<?php
	}
	else{

	$query = "UPDATE students SET father_name = '$father_name' ,student_name = '$student_name',admission_number = '$admission_number',grade_id = '$grade_id',nic = '$nic',dob='$dob',gender='$gender',telephone_number='$telephone_number',address='$address' WHERE id ='$id'; ";
	$results = mysqli_query($conn, $query);
	if (!$results) {
		echo mysqli_error($conn);
	}
	header("Location: ../?section=students&page=index");
	exit;
}
}
