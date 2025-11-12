<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location: /school-system/auth/login.php");
    exit();
}
