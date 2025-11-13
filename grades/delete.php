<?php
$id = $_GET['id'];
require_once('../config.php');

$query = "	DELETE FROM grades WHERE id='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
	echo "query executed successfully...";
	header("Location:../?section=grades&page=index");
} else {
	echo ("query not executed..") . mysqli_error($conn);
}
