<!-- HEAD -->
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
	$page='support';
	if(isset($_SESSION['userLoggedin']) && $_SESSION['userLoggedin']  == true){
		header("Location: account-main.php");
	} 
	else {
    include("head.php");
?>

<!-- BODY -->
<body>

<?php
	include('nav.php');
?>

<div class="support-flex-container">
	<div>
			 
			<!-- page title and lines -->
			<p class="title">support</p>
			<hr class="title-line1"></hr>
			<hr class="title-line2"></hr>

			<!-- login/registration buttons -->
			<div class="support-flex-container">
				<div><a href="login.php"><div class="support-buttons">login</div></a></div>
				<div><a href="registration.php"><div class="support-buttons">signup</div></a></div>
			</div>




	<p class="logout-confirmation"></p>

	</div>
</div>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>


</body>

<?php 
	} 
?>