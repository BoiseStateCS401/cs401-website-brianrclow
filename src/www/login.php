<?php 
    $page='support';
    include("header.php");
?>

<h1>Login</h1>

<form id="login" method="POST" action="login-handler.php">
    <table>
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" name="username" required="true">
            </td>
        </tr>
        <tr>
        <td>Password:</td>
            <td>
                <input type="password" name="password" required="true">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Login">
            </td>
        </tr>
    </table>

<?php 
	include("footer.php");
?>