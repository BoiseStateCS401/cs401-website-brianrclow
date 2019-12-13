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
            <form id="registration" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label for="password">current password:</label>
                            </td>
                            <td>
                                <input type="password" id="password" name="password"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="newPassword">new password:</label>
                            </td>
                            <td>
                                <input type="password" id="newPassword" name="newPassword"d>                        
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