<?php
$id = $_GET['id'];
require_once('../config.php');

$query1 = "UPDATE students SET image =null,file_name=null WHERE id ='$id'; ";
$results1 = mysqli_query($conn, $query1);

if (!$results1) {
    echo mysqli_error($conn);
}
header ("location: edit.php?id=$id");
?>
