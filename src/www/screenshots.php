<!-- HEADER -->
<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
	$page='screenshots';
	include("head.php");
?>

<!-- BODY -->
<body>

	<?php
		include('nav.php');
	?>

	<!-- page title and lines -->
	<p class="title">screenshots</p>
	<hr class="title-line1"></hr>
	<hr class="title-line2"></hr>

	<!-- app screenshots- likely 4? -->
	<div class="screenshots-flex-container">
		<img class="zoom" src="/images/placeholder_iphone_screenshot.png">
		<img class="zoom" src="/images/placeholder_iphone_screenshot.png">
		<img class="zoom" src="/images/placeholder_iphone_screenshot.png">
		<img class="zoom" src="/images/placeholder_iphone_screenshot.png">
	</div>
	
</body>


<!-- FOOTER -->
<?php 
	include("footer.php");
?>