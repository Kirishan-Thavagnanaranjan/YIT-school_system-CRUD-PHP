<?php
$id = $_GET['id'];


$query = "DELETE FROM subjects WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location:?section=subjects&page=index");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>