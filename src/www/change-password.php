<!-- HEADER -->
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

    $page='support';
    include("head.php");
?>

<body>

    <?php
		include('nav.php');
	?>

    <div class="support-flex-container">
        <div>
        <h1 class="account-main-title">Change your password</h1>
            <p id="edit-account-info"></p>
            <form id="registration" method="POST" action="change-password-handler.php" autocomplete="off">
                    <table>
                        <tr>
                            <td>
                                <label for="user_email_field">email:</label>
                            </td>
                            <td>
                                <input type="text" id="user_email_field" name="user_email"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="user_password_field">password:</label>
                            </td>
                            <td>
                                <input type="password" id="user_password_field" name="user_password"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="new_password_field">new password:</label>
                            </td>
                            <td>
                                <input type="password" id="new_password_field" name="new_password"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Confirm changes" class="confirmChangesButton">    
                            </td>
                        </tr>
                    </table>
                </form>

            <div class="support-flex-container">
                <div>
                    <a href="account-main.php"><input type="submit" value="back"></a>
                </div>
            </div>



        </div>
    </div>

    <script src="/js/confirm-changes.js" defer></script>

    <!-- FOOTER -->
<?php 
	include("footer.php");
?>

</body>

<?php
    }
?>