<?php
	session_start();
	include("checksession.php");

	include("dbconnection.php");

	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$sql="SELECT * FROM login where email='$email' and password='$password'";
	$query=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($query);
	
	if($count>0)
	{
		$_SESSION['email']=$email;
		header('location:dashborad.php');
	}
	else
	{
		header('location:index.php');
	};
?>