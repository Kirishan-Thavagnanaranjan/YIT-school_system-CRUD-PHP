<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$grade_name = $_POST['grade_name'];
	$grade_group  =$_POST['grade_group'];
	$grade_color = $_POST['grade_color'];
	$grade_order = $_POST['grade_order'];

	
	require_once('../config.php');
	$query = "UPDATE grade SET grade_name = '$grade_name' ,grade_group = '$grade_group',grade_color = '$grade_color',grade_order = '$grade_order' WHERE id ='$id'; ";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	else{
		echo "query excuted";
	}
	header("Location: index.php");
}

?>