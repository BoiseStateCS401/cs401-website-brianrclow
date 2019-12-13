<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	if(!isset($_SESSION['userLoggedin'])){
        header("Location: support.php");
    } 
    else {
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        // var_dump($_SESSION); // FOR TESTING
        include("head.php");
        $user_username = $_SESSION['user_username'];
        $user_password = $_SESSION['user_password'];
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
            <a href="change-username.php"><div class="support-buttons">change username</div></! -->
        </div>
        <div>
            <a href="change-password.php"><div class="support-buttons">change password</div></a>
        </div>
    </div>

    <div class="support-flex-container">
        <div>
            <a href="logout.php"><button>logout</button></a>
        </div>
    </div>

    <script src="/js/confirm-logout.js" defer></script>

    <!-- FOOTER -->
    <?php 
        include("footer.php");
    ?>
</body>

<?php
    }
?>

