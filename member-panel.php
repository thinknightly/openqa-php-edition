<?php
// Head & Header
$title = "ยินดีต้อนรับ, คุณ" . $_SESSION['fullname'];
require('functions/auth/check_user.php');
require('components/head.php');
require('components/header.php');

// Body


// Footer
require_once('components/footer.php');
?>