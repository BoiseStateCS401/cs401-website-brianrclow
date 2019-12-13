<!-- HEADER -->
<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
    $page='download';
    include("head.php");
?>

<!-- BODY -->
<body>

	<?php
		include('nav.php');
	?>

	<!-- page title and lines -->
	<p class="title">download</p>
	<hr class="title-line1"></hr>
	<hr class="title-line2"></hr>

	<!-- main flex area that creates column-->
	<div class="download-flex-container">
		<div>
			<div><img class="zoom" src="/images/placeholder_iphone_screenshot.png"></div>	
			<div><a href="https://apps.apple.com/us/app/yl-boise-state/id1477862280"><img class="app-store-button" src="images/downloadappstore.png" alt="download page"></a></div>
		</div>
	</div>
	
	<!-- FOOTER -->
<?php 
	include("footer.php");
?>

</body>


