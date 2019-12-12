<?php 
    session_start();
    include("head.php");
    $user_username = $_SESSION['username'];
    $user_password = $_SESSION['password'];
    var_dump($_SESSION);
?>

<!-- BODY -->
<body>

    <?php
        include('nav.php');
    ?>
    <div class="registration-container">
        <div>
            <h1 class="account-main-title">Welcome to your account <?= $user_username ?>!</h1>

            <h3>Currently our website allows you to update your account information.</h3>
            <h3>There will be more features coming soon...</h3>
        </div>
    </div>

    <div class="support-flex-container">
        <div>
            <!-- ADD: href="change-username.php"  -->
            <a><div class="support-buttons">change username</div></! -->
        </div>
        <div>
        <!-- ADD: href="change-password.php" -->
            <a><div class="support-buttons">change password</div></a>
        </div>
    </div>

    <div class="support-flex-container">
        <div>
            <a href="logout.php">logout</a>
        </div>
    </div>

    <script src="/js/confirm-logout.js" defer></script>

    <!-- FOOTER -->
    <?php 
        include("footer.php");
    ?>
</body>

