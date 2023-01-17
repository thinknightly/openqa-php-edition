<?php
require_once('../connection/connector.php');
$connectDB = getConnection($host, $user, $pass, $db);
// Sanitize input
$username = mysqli_real_escape_string($connectDB, trim($_POST['openqa-username']));
$password = mysqli_real_escape_string($connectDB, trim($_POST['openqa-password']));

// Validate input
if (empty($username) || empty($password)) {
    echo "<script type='text/javascript'>" .
        "alert('ช่องชื่อผู้ใช้งานหรือรหัสผ่านของคุณว่าง!');" .
        "location.href='/openqa-php-edition/signin.php'" .
        "</script>";
    exit;
}

$query = "SELECT * FROM employee WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($connectDB, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_stmt_close($stmt);
if (mysqli_num_rows($result) == 1) {
    session_start();
    $user = mysqli_fetch_assoc($result);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['fullname'] = $user['fullname'];
    $_SESSION['role'] = $user['role'];
    if ($user['role'] == '1') {
        header("Location: /openqa-php-edition/admin-panel.php");
    } else {
        header("Location: /openqa-php-edition/member-panel.php");
    }
} else {
    echo "<script type='text/javascript'>" .
        "alert('ชื่อผู้ใช้งานหรือรหัสผ่านของคุณไม่ถูกต้อง!');" .
        "location.href='/openqa-php-edition/signin.php'" .
        "</script>";
}
mysqli_close($connectDB);

?>