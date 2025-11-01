<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    require_once("../config.php");

    $query = "SELECT * FROM user WHERE user_name = '$user_name' AND password='$password';";
    $results = mysqli_query($conn, $query);
    $row = mysqli_num_rows($results);

    if ($row == 1) {
        $_SESSION['user_name'] = $user_name;
        echo "success";
        header("location: ../index.php");
    } else {
        echo "Log in failed";
        header("location: ./login.php");
    }
}
