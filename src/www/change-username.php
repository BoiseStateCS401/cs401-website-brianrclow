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
            <form id="registration" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label for="username">current username:</label>
                            </td>
                            <td>
                                <input type="text" id="username" name="username"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="newUsername">new username:</label>
                            </td>
                            <td>
                                <input type="text" id="newUsername" name="newUsername"d>                        
                            </td>
                        </tr>
                        <input type="submit" value="Confirm changes" class="confirmChangesButton">

                    </table>
                </form>

                <a href="account-main.php"><input type="submit" value="back"></a>



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