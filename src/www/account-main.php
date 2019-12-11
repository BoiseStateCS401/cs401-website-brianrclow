<!-- HEAD -->
<?php 
    session_start();
    $page='login';
    include("head.php");
?>


<!-- BODY -->
<body>

    <?php
        include('nav.php');
    ?>
    <div class="registration-container">
        <div>
            <h1 class="account-main-title">Welcome to your account <?php $username ?></h1>

            <h3>Currently our website allows for updating account information.</h3>
            <h3>There will be more features coming soon...</h3>
        </div>
    </div>

    <div class="support-flex-container">
        <div>
            <a href="change-username.php"><div class="support-buttons">change username</div></a>
        </div>
        <div>
            <a href="change-password.php"><div class="support-buttons">change password</div></a>
        </div>
    </div>

    <div>
        <input type="submit" value="logout" class="logoutButton"></input>
    </div>


    <?php if($validLogin = false){?>
        <p> You are logged out!</p>
        <?php }?>

    <script src="/js/confirm-logout.js" defer></script>

    <!-- FOOTER -->
    <?php 
        include("footer.php");
    ?>

</body>
