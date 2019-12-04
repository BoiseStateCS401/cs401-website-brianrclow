<!-- HEADER -->
<?php 
    $page='support';
    include("header.php");
?>

<!-- BODY -->
<body>


	<?php
		if($validLogin = true){?>
		
			<h2>Welcome to your account!</h2>
			<p>Web login allows you to edit your account information:</p>

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
						<tr>
							<td>
								<input type="submit" value="Confirm changes" class="confirmChangesButton">
							</td>
						</tr>
					</table>
				</form>
			<p id="edit-account-info"></p>
			<input type="submit" value="logout" class="logoutButton"></input>
			<?php
					if($validLogin = false){?>
						<p> You are logged out!</p>
						<?php }?>
			<script src="/js/confirm-changes.js" defer></script>
			<script src="/js/confirm-logout.js" defer></script>
		
		<?php } else { ?>
			<!-- page title and lines -->
			<p class="title">support</p>
			<hr class="title-line1"></hr>
			<hr class="title-line2"></hr>

			<!-- login/registration buttons -->
			<div class="support-flex-container">
				<div><a href="login.php"><div class="support-buttons">login</div></a></div>
				<div><a href="registration.php"><div class="support-buttons">signup</div></a></div>
			</div>
		<?php } ?>


	<p class="logout-confirmation"></p>

</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>