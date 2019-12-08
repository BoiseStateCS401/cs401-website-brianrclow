<!-- HEAD -->
<?php 
    session_start();
    $page='support';
    include("head.php");
?>

<!-- BODY -->
<body>

    <?php
		include("header.php");
    ?>
    
    <div class="login-container">
        <div>
            <h1 class="title">registration</h1>

            <form id="registration" method="POST" action="registration-handler.php">
                <table>
                    <tr>
                        <td>
                            <label for="username">username:</label>
                        </td>
                        <td>
                        <!-- value="?= $_SESSION['presets']['username'] ?>"  -->
                            <input type="text" id="username" name="username" required="true">                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">email:</label>
                        </td>
                        <td>
                        <!-- value="?= $_SESSION['presets']['username'] ?>"  -->
                            <input type="text" id="email" name="email" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">password:</label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password" required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="repeat-password">repeat password:</label>
                        </td>
                        <td>
                            <input type="password" id="repeat-password" name="passwordAgain" required="true">
                        </td>
                    </tr>
                </table>
            </form>

            <input class="submit-button" type="submit" value="enter">

            <?php
                $validRegistration = isset($_GET['vavalidRegistrationlid']) ? $_GET['validRegistration'] : true;
                if($validRegistration == 'false') { 
            ?>
                <!-- <span>?php print_r($_SESSION['error']);?></span> -->
            <?php } ?>

        </div>
    </div>
</body>



<!-- FOOTER -->
<?php 
	include("footer.php");
?>