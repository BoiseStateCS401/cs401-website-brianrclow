<?php 
    $page='support';
    include("header.php");
?>

<p> this is the login page <p>


<!-- <p> login <p>
<p> name <p>
<p> email <p>
<p> password <p>
<p> password again <p>
<p> submit <p> -->

<form action="login.php"method="post">
    <table>
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" name="user">
            </td>
        </tr>
        <tr>
        <td>Password:</td>
            <td>
                <input type="password" name="user">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="login">
            </td>
        </tr>
    </table>

<?php 
	include("footer.php");
?>