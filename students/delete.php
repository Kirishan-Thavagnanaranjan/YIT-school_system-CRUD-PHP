<?php
$id = $_GET['id'];

require_once("../config.php");

$query = "	DELETE FROM students WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location:index.php");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>