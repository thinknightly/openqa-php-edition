<?php
// Head & Header
$title = "ยินดีต้อนรับ, คุณ" . $_SESSION['fullname'];
require('functions/auth/check_admin.php');
require('include/head.php');
require('include/header.php');

// Body
require('');

// Footer
require_once('include/footer.php');
?>