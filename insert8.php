<?php 

include('dbconnection.php');

if(isset($_REQUEST['submit1'])){
	
	
 $name=$_REQUEST['name'];

 $email=$_REQUEST['email'];
 
 $phone=$_REQUEST['phone'];

 $adults=$_REQUEST['adults'];
 
 $Children=$_REQUEST['Children'];
 
  $checkinDate=$_REQUEST['checkinDate'];
  
  $checkOutDate=$_REQUEST['checkOutDate'];
  
  $message=$_REQUEST['message'];

    $sql = "INSERT INTO reservation_1(name,email,phone,adults,Children,checkinDate,checkOutDate,message) VALUES ('$name', '$email','$phone','$adults','$Children','$checkinDate','$checkOutDate','$message')";

$result1 = mysqli_query($conn, $sql);
	header("location:booking.php");
	 
	


}

	if(isset($_REQUEST['update'])){
	$id=$_REQUEST['id'];
	
 $name=$_REQUEST['name'];

 $email=$_REQUEST['email'];
 
 $phone=$_REQUEST['phone'];

 $adults=$_REQUEST['adults'];
 
 $Children=$_REQUEST['Children'];
 
  $checkinDate=$_REQUEST['checkinDate'];
  
  $checkOutDate=$_REQUEST['checkOutDate'];
  
  $message=$_REQUEST['message'];

	$sql0 = "UPDATE reservation_1 SET name='$name',email='$email',phone='$phone',adults='$adults',Children='$Children',checkinDate='$checkinDate',checkOutDate='$checkOutDate',message='$message' WHERE id='$id'";

$result2 = mysqli_query($conn, $sql0);
 header("location:dashborad1.php");
	}


?>