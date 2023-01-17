<?php
// Setting Title Name
$title = "เข้าสู่ระบบ - openQA";
// Import Components and Customize CSS
require('components/head.php');
require('components/header.php');
?>

<!-- CSS for SignIn -->

<head>
    <link rel="stylesheet" href="css/signin.css" />
</head>

<body>
    <div class="container">
        <div class="min-vh-100 d-flex justify-content-center align-items-center">
            <form action="functions/auth/auth.php" method="post">
                <center>
                    <img src="images/icons/openqa-svg.svg" class="mt-3 mb-2" alt="Logo" width="100" height="100">
                </center>
                <h1 class="text-center fw-bold">เข้าสู่ระบบ</h1>
                <div class="mb-2">
                    <input type="text" placeholder="ชื่อผู้ใช้งาน" class="form-control" name="openqa-username" />
                </div>
                <div class="mb-2">
                    <input type="password" placeholder="รหัสผ่าน" class="form-control" name="openqa-password" />
                </div>
                <div class="mb-2">
                    <input type="submit" value="เข้าสู่ระบบ" class="form-control btn btn-success" />
                </div>
            </form>
        </div>
    </div>

    <?php require_once('components/footer.php'); ?>
</body>