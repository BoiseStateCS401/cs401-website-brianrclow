<!-- HEAD -->
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
    include("head.php");
?>

<!-- BODY -->
<body class="body-container">

    <?php
        include('nav.php');
    ?>

    <div>
        <h1 class="title">login</h1>

        <form id="login" action="login-handler.php" method="POST" autocomplete="off">
            <table class="support-flex-container">
                <tr>
                    <td>
                        <label for="user_username_field">username:</label>
                    </td>
                    <td>
                        <input type="text" name="user_username" id="user_username_field" required="true" > 
                    </td>
                        
                </tr>
                <tr>
                    <td>
                        <label for="user_password_field">password:</label>
                    </td>
                    <td>
                        <input type="password" name="user_password" id="user_password_field" required="true">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="enter">
                    </td>
                </tr>
            </table>
        </form>
        <div class="support-flex-container">
            <div>
                <a href="support.php"><input type="submit" value="back"></a>
            </div>
        </div>
        
    </div>
    

</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>