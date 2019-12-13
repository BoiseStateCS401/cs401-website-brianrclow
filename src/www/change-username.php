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
            <p id="edit-account-info"></p>
            <h1 class="account-main-title">Change your username</h1>
            <form id="registration" method="POST" action="change-username-handler.php" autocomplete="off">
                    <table>
                        <tr>
                            <td>
                                <label for="user_username_field">username:</label>
                            </td>
                            <td>
                                <input type="text" id="user_username_field" name="user_username"d>                        
                            </td>
                        </tr>
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
                                <label for="new_username_field">new username:</label>
                            </td>
                            <td>
                                <input type="text" id="new_username_field" name="new_username"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Confirm change" class="confirmChangesButton">
                            </td>
                        </tr>
                    </table>
                </form>

                <div class="support-flex-container">
                    <div>
                        <a href="account-main.php"><input type="submit" value="back"></a>
                    </div>
                </div>

                <?php
                    if(isset($_SESSION['new_username'])){
                        $_SESSION['user_username'] = $_SESSION['new_username'];
                    }
                ?>


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