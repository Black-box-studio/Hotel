<?php
	session_start();
	
	include("checksession.php");
	 
	echo "welcome".$_SESSION['email'];
?>
<h1>home page</h1>
<a href="logout.php">logout</a>