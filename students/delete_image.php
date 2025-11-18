<?php
$id = $_GET['id'];
$path = $_GET['path'];
require_once('../config.php');
if (file_exists($path)) {
    unlink($path);
}
$query1 = "UPDATE students SET image =null,file_name=null WHERE id ='$id'; ";
$results1 = mysqli_query($conn, $query1);

if (!$results1) {
    echo mysqli_error($conn);
}
header("location: ../?section=students&page=edit&id=$id");
