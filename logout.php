<?php
	session_start();
	session_destroy();
	echo "Signing out... Please wait";
	header('Refresh: 1; URL = index.php');
?>