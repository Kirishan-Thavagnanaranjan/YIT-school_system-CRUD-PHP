<?php
$id = $_GET['id'];
$path = $_GET['path'];

require_once("../config.php");
if(file_exists($path)){
	unlink($path);
}

$query = "	DELETE FROM students WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location: ../?section=students&page=index");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>