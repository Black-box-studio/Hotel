<?php 

include('dbconnection.php');

if(isset($_REQUEST['submit1'])){
		
 $name=$_REQUEST['name'];
 
 $email=$_REQUEST['email'];

 $subject=$_REQUEST['subject'];

 $message=$_REQUEST['message'];


   $sqll= "INSERT INTO back(name,email,subject,message)VALUE('$name','$email','$subject','$message')";

		$result1 = mysqli_query($conn, $sqll);
	

header('location:contact.php'); // to redirect page 

}


if(isset($_REQUEST['update'])){
	
  $id=$_REQUEST['id'];	
	
 $name=$_REQUEST['name'];
 
 $email=$_REQUEST['email'];

 $subject=$_REQUEST['subject'];

 $message=$_REQUEST['message'];
	

	
  $sqll= "UPDATE back SET name='$name',email='$email',subject='$subject',message='$message' WHERE id='$id'";

$result1 = mysqli_query($conn, $sqll);

header('location:dashborad1.php'); // to redirect page

	

}





?>