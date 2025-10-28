<?php

$conn = mysqli_connect("localhost","root","","school_system_db");

if(!$conn){
    die("Database not connected!" .mysqli_connect_error());
}

?>