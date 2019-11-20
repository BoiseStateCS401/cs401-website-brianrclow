<?php 
    session_start();
    $page='support';
    include("header.php");
?>

<h1>Registration</h1>

<section>
    <form id="registration" method="POST" action="registration-handler.php">
        <table>
            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" required="true" value="<?= $_SESSION['presets']['username'] ?>" >                        
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="text" id="email" name="email" required="true" value="<?= $_SESSION['presets']['email'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" id="password" name="password" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="repeat-password">Repeat Password:</label>
                </td>
                <td>
                    <input type="password" id="repeat-password" name="passwordAgain" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

    <?php
        $validRegistration = isset($_GET['vavalidRegistrationlid']) ? $_GET['validRegistration'] : true;
        if($validRegistration == 'false') { 
    ?>
        <span><?php print_r($_SESSION['error']);?></span>
    <?php } ?>
</section>
<?php 
	include("footer.php");
?>