<!-- HEAD -->
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
    include("head.php");
?>

<!-- BODY -->
<body>

    <?php
		include('nav.php');
    ?>
    
    <div class="login-container">
        <div>
            <h1 class="title">registration</h1>

            <form id="registration" method="POST" action="registration-handler.php" autocomplete="off">
                <table>
                    <tr>
                        <td>
                            <label for="user_username_field">username:</label>
                        </td>
                        <td>
                        <!-- value="?= $_SESSION['presets']['username'] ?>"  -->
                            <input type="text" id="user_username_field" name="user_username" required="true" maxlength="50">                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="user_email_field">email:</label>
                        </td>
                        <td>
                        <!-- value="?= $_SESSION['presets']['username'] ?>"  -->
                            <input type="text" id="user_email_field" name="user_email" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="user_password_field">password:</label>
                        </td>
                        <td>
                            <input type="password" id="user_password_field" name="user_password" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="user_password_repeat_field">repeat password:</label>
                        </td>
                        <td>
                            <input type="password" id="user_password_repeat_field" name="user_password_repeat" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="submit-button" type="submit" value="enter">
                        </td>
                    </tr>
                </table>
            </form>

            <div class="support-flex-container">
                <div>
                    <a href="support.php"><input type="submit" value="back"></a>
                </div>
            </div>



            <?php
                // $validRegistration = isset($_GET['validRegistration']) ? $_GET['validRegistration'] : true;
                // if($_SESSION['valid'] == false) { 
            ?>
                <!-- <span>THERE WAS AN ERROR</span> -->
            <?php 
                // } 
            ?>

        </div>
    </div>
</body>



<!-- FOOTER -->
<?php 
	include("footer.php");
?>