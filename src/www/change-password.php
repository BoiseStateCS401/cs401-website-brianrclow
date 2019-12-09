<!-- HEADER -->
<?php 
    $page='support';
    include("head.php");
?>

<body>

    <?php
		include('nav.php');
	?>

    <div class="support-flex-container">
        <div>
        <h1 class="account-main-title">Change your password</h1>
            <p id="edit-account-info"></p>
            <form id="registration" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label for="password">current password:</label>
                            </td>
                            <td>
                                <input type="password" id="password" name="password"d>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="newPassword">new password:</label>
                            </td>
                            <td>
                                <input type="password" id="newPassword" name="newPassword"d>                        
                            </td>
                        </tr>
                    </table>
                </form>


            <input type="submit" value="Confirm changes" class="confirmChangesButton">

            <a href="support.php"><input type="submit" value="back"></a>

        </div>
    </div>

    <script src="/js/confirm-changes.js" defer></script>

    <!-- FOOTER -->
<?php 
	include("footer.php");
?>

</body>

