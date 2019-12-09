<!-- HEADER -->
<?php 
	$page='features';
	include("head.php");
?>

<!-- BODY -->
<body>

	<?php
		include('nav.php');
	?>

	<!-- page title and lines -->
	<p class="title">features</p>
	<hr class="title-line1"></hr>
	<hr class="title-line2"></hr>

	<!-- feature tiles -->
	<div class="screenshots-flex-container">

		<!-- chores -->
		<div class="features-6-groups">
			<img class="zoom" src="images/chores_logo.png">
			<p class="features-titles">chores</p>
			<p>Organize chores with rommates</p>
		</div>

		<!-- locations -->
		<div class="features-6-groups">
			<img class="zoom" src="images/locations_logo.png">
			<h2 class="features-titles">locations</h2>
			<p>See if your rommates are home</p>
		</div>

		<!-- notifications -->
		<div class="features-6-groups">
			<img class="zoom" src="images/notifications_logo.png">
			<h2 class="features-titles">notifications</h2>
			<p>Get notified when changes are made</p>
		</div>

		<!-- messages -->
		<div class="features-6-groups">
			<img class="zoom" src="images/messages_logo.png">
			<h2 class="features-titles">messages</h2>
			<p>Chat about dwelling in app</p>
		</div>

		<!-- bills -->
		<div class="features-6-groups">
			<img class="zoom" src="images/split_bills_logo.png">
			<h2 class="features-titles">bills</h2>
			<p>Overview of bills for the month</p>
		</div>

		<!-- split purchases -->
		<div class="features-6-groups">
			<img class="zoom" src="images/splitpurchases_logo.png">
			<h2 class="features-titles">split purchases</h2>
			<p>Easily divvy up costs</p>
		</div>

	</div>

	<!-- FOOTER -->
<?php 
	include("footer.php");
?>

</body>

