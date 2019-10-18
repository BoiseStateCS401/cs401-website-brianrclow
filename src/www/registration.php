<?php session_start();?>
<?php 
    $page='support';
    include("header.php");
?>

<h1>Registration</h1>

<section>
            <form id="registration" method="POST" action="requests/registration-handler.php">
                <label for="query">Name</label>
                <input type="text" id="name" name="name">

                <label for="query">Email</label>
                <input type="text" id="query" name="email" 
                
                >

                <label for="query">Password</label>
                <input type="password" id="query" name="password" required="true">

                <label for="query">Password Again</label>
                <input type="password" id="query" name="passwordAgain">

                <input type="submit" value="Register">
            </form>
            <?php
            $valid = isset($_GET['valid']) ? $_GET['valid'] : true;
            if($valid == 'false') { ?>
                <span><?php print_r($_SESSION['error']); ?></span>
            <?php }
            ?>
        </section>