<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: /openqa-php-edition/signin.php");
    session_destroy();
    exit;
}
if ($_SESSION['role'] != '0') {
    echo "<script>alert('สำหรับผู้ใช้งานเท่านั้น!');window.location='/openqa-php-edition/signin.php';</script>";
    session_destroy();
    exit;
}
?>