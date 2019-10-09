<?php
	require_once(“Dao.php”);
	$dao = new Dao();
	echo $dao->getConnectionStatus();
