<?php 
    session_start();

    // function isLoggedin()  {
    //     if(isset($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] === true){
    //         return true;
    //     } else{
    //         return false;
    //     }
    // }

    // if(!isLoggedin()){
    //     // redirect them to login/register page
    //     header("Location: support.php");
    // }



    // if ($Session['userLoggedin'] == true){
    include("head.php");
    $user_username = $_SESSION['username'];
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
                <a href="change-username.php"><div class="support-buttons">change username</div></a>
            </div>
            <div>
                <a href="change-password.php"><div class="support-buttons">change password</div></a>
            </div>
        </div>

        <div class="support-flex-container">
            <div>
                <input type="submit" value="logout"></input>
            </div>
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

    <?php 
// }
// else{
//     include("support.php");
// }
?>
