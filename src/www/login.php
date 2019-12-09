<!-- HEADER -->
<?php 
    session_start();
    $page='support';
    include("head.php");
?>

<!-- BODY -->
<body>

    <?php
		include('nav.php');
	?>

    <div class="login-container">

        <div>
            <h1 class="title">login</h1>
            <form id="login" action="login-handler.php"  method="POST" autocomplete="off">
                <table>
                    <tr>
                        <td><label for="username_field">username:</label></td>
                        <td>
                            <input type="text" name="user_username" id="username_field" required="true" > 
                        </td>
                    </tr>
                    <tr>
                    <td><label for="password_field">password:</label></td>
                        <td>
                            <input type="password" name="user_password" id="password_field" required="true">
                        </td>
                    </tr>
                </table>
            </form>
            <input class="submit-button" type="submit" name="submit" value="enter" >
        </div>
    </div>

</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>