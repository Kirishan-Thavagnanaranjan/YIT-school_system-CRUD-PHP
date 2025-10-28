<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$father_name = $_POST['father_name'];
	$student_name  =$_POST['student_name'];
	$admission_number = $_POST['admission_number'];
	$grade_id = $_POST['grade_id'];
	$nic = $_POST['nic'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$telephone_number = $_POST['telephone_number'];
	$address = $_POST['address'];
	
	require_once('../config.php');
	$query = "INSERT INTO students(father_name,student_name,admission_number,grade_id,nic,dob,gender,telephone_number,address) VALUES('$father_name','$student_name','$admission_number','$grade_id','$nic','$dob','$gender','$telephone_number','$address');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: index.php");
}

?>