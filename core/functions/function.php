<?php
// Start Sesstion and Import Database Config
session_start();
include('config_db.php');
// MySQL Database Connection
$connect = mysqli_connect($host, $user, $password, $database);

function database_connector() {
    
}
?>