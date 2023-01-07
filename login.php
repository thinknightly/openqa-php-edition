<?php
// Include Header and Navigator Bar
echo ("<title>เข้าสู่ระบบ - openQA</title>");
include('assets/components/index/header.php');
include('assets/components/index/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

<!-- Login Form!!! -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form class="form-control" action="#" method="POST">
            <div class="mt-3">
                <h1 class="text-center">เข้าสู่ระบบ</h1>
            </div>
            <div class="mb-2">
                <label for="formGroupExampleInput" class="form-label">
                    ชื่อผู้ใช้งาน
                </label>
                <input type="text" class="form-control" name="opqa_username" required />
            </div>
            <div class="mt-2 mb-3">
                <label for="formGroupExampleInput" class="form-label">
                    รหัสผ่าน
                </label>
                <input type="password" class="form-control" name="opqa_password" required />
            </div>
            <input class="form-control mb-2 btn btn-success" type="submit" value="เข้าสู่ระบบ" />
        </form>
    </div>
</body>

</html>