<?php 
    $page='support';
    include("header.php");
?>
	<table>
		<tr>
			<p><a href="login.php">Login</a><p>
		</tr>
		<tr>
			<p><a href="registration.php">Register</a><p>
		</tr>

	</table>
	<?php
		if($validLogin = true){?>
			<p> You are logged in!
			</p>
			<?php }?>

	<img src="images/supportpage.png" alt="support page">

<?php 
	include("footer.php");
?>