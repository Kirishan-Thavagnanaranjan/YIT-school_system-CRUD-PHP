<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location: /school_system/auth/login.php");
    exit();
}
