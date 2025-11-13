<?php 

$grade_id = $_GET['id'];
$subject_id = $_GET['sub_id'];

require_once("../config.php");


$query = "DELETE FROM grade_subject WHERE grade_id = '$grade_id' AND subject_id = '$subject_id';";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location: ../?section=grades&page=addsubject&id=$grade_id");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>