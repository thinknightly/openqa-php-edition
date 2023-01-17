<?php
require_once('database_config.php');
function getConnection($host, $user, $pass, $db)
{
    $connectDB = mysqli_connect($host, $user, $pass, $db);
    if (!$connectDB) {
        die("การเชื่อมต่อฐานข้อมูลผิดพลาด!: " . mysqli_connect_error());
    }
    return $connectDB;
}
?>