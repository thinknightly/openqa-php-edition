<?php
// Database Connection
require_once('../connection/connector.php');
$connectDB = getConnection($host, $user, $pass, $db);

// Get data from addUser from DB
$fullname = $_POST['openqa-addFullname'];
$username = $_POST['openqa-addUsername'];
$password = $_POST['openqa-addPassword'];
$department = $_POST['openqa-addDepartment'];
$role = $_POST['openqa-addRole'];

// Show All Users in Pages
function listUsers($connectDB)
{
    mysqli_close($connectDB);
}

// Search User
function searchUser($connectDB){
    
}

// Create User
function createUser($fullname, $username, $password, $department, $role, $connectDB)
{
    mysqli_close($connectDB);
}
// Update User
function updateUser($fullname, $username, $password, $department, $role, $connectDB)
{

}
// Delete User
function removeUser()
{

}
?>