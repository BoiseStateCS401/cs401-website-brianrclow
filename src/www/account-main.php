<!-- HEAD -->
<?php 
    session_start();
    $page='login';
    include("head.php");
?>

<body>

<h2 class="account-main-title">Welcome to your account <?= $_SESSION['user']; ?>! </h2>

<p>You can change your account information here</p>

<div>
    <a href="change-username.php"><button>change username</button></a>
</div>
<div>
    <a href="change-password.php"><button>change password</button></a>
</div>


<!-- <form id="registration" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">current username:</label>
                </td>
                <td>
                    <input type="text" id="username" name="username"d>                        
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="password">password:</label>
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
            </tr>
        </table>
    </form> -->
<!-- 
<p id="edit-account-info"></p>
<input type="submit" value="Confirm changes" class="confirmChangesButton"> -->

<div><input type="submit" value="logout" class="logoutButton"></input></div>
    <?php if($validLogin = false){?>
			<p> You are logged out!</p>
			<?php }?>
<script src="/js/confirm-changes.js" defer></script>
<script src="/js/confirm-logout.js" defer></script>
</body>
