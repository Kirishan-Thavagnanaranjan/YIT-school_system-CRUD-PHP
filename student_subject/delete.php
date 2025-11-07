<?php 

$student_id = $_GET['id'];
$subject_id = $_GET['sub_id'];

require_once("../config.php");


$query = "DELETE FROM student_subject WHERE student_id = '$student_id' AND subject_id = '$subject_id';";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location: ../students/addsubject.php?id=$student_id");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>