<nav class="navbar fixed-top bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/openqa-php-edition">
            <img src="images/icons/openqa-svg.svg" alt="Logo" width="30" height="30"
                class="d-inline-block align-text-top">
            <b>openQA</b>
        </a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php
            if (!isset($_SESSION['loggedin'])) {
                echo "
                    <li class='nav-item'>
                    <a class='btn btn-success' href='signin.php' role='button'>เข้าสู่ระบบ</a>
                    </li>";
            } else {
                echo "<li class='nav-item'>" . "<a class='btn btn-danger' href='functions/auth/signout.php' role='button'>ออกจากระบบ</a>" . "</li>";
            }
            ?>
        </ul>
    </div>
</nav>