
<body>
<h2 class="account-main-title">Welcome to your account!</h2>

<form id="registration" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>
                <td>
                    <input type="text" id="username" name="username"d>                        
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="text" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
            </tr>
        </table>
    </form>

<p id="edit-account-info"></p>
<input type="submit" value="Confirm changes" class="confirmChangesButton">
<input type="submit" value="logout" class="logoutButton"></input>
    <?php if($validLogin = false){?>
			<p> You are logged out!</p>
			<?php }?>
<script src="/js/confirm-changes.js" defer></script>
<script src="/js/confirm-logout.js" defer></script>
</body>
