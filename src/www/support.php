<?php 
    $page='support';
    include("header.php");
?>

	<p class="title">support</p>
	<hr class="title-line1"></hr>
	<hr class="title-line2"></hr>

	<div class="download-flex-container">
		<div>
			<button class="support-buttons"><a href="login.php">Login</a></button>
		</div>
		<div>
			<button class="support-buttons"><a href="registration.php">Register</a></button>
		</div>
	</div>
	
	
	<?php
		if($validLogin = true){?>
			<p> You are logged in!</p>
	<?php }?>

	<p class="logout-confirmation"></p>

	<img src="images/supportpage.png" alt="support page">

<?php 
	include("footer.php");
?>