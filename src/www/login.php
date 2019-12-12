<!-- HEAD -->
<?php 
    session_start();
    $page='support';
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
                        <label for="username_field">username:</label>
                    </td>
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
                <tr>
                    <td>
                        <input class="submit-button" type="submit" name="submit" value="enter" >
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>