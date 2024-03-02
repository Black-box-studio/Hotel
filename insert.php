<?php
	include("dbconnection.php");
	if(isset($_REQUEST['submit']))
	{
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$password=$_REQUEST['password'];
			

		
		$sql="INSERT INTO login(name,email,password) VALUE('$name','$email','$password')";
		
		mysqli_query($conn,$sql);
		 header('location:login.php');
	}

?>