<!-- HEADER -->
<?php 
    $page='support';
    include("header.php");
?>

<!-- BODY -->
<body>

<div class="support-flex-container">
	<div>
		<?php
			if($validLogin = true){
				include("account-main.php");
			 } else { ?>
			 
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

	</div>
</div>




</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>