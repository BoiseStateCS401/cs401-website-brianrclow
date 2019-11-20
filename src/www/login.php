<?php 
    session_start();
    $page='support';
    include("header.php");
?>

<h1>Login</h1>

<section>
    <form id="login" method="POST" action="login-handler.php">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td>
                    <input type="text" name="username" id="username" required="true" value="<?= $_SESSION['presets']['username'] ?>">
                </td>
            </tr>
            <tr>
            <td><label for="password">Password:</label></td>
                <td>
                    <input type="password" name="password" id="password" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</section>

<?php 
	include("footer.php");
?>