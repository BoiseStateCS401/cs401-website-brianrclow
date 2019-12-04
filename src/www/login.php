<!-- HEADER -->
<?php 
    session_start();
    $page='support';
    include("header.php");
?>

<!-- BODY -->
<body>

    <div class="login-container">

        <div>
            <h1 class="title">login</h1>
            <form id="login" method="POST" action="login-handler.php">
                <table>
                    <tr>
                        <td><label for="username">username:</label></td>
                        <td>
                        <!-- value="?= $_SESSION['presets']['username'] ?>" -->
                            <input type="text" name="username" id="username" required="true"> 
                        </td>
                    </tr>
                    <tr>
                    <td><label for="password">password:</label></td>
                        <td>
                            <input type="password" name="password" id="password" required="true">
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