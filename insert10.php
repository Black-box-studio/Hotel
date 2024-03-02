<?php 

include('dbconnection.php');

if(isset($_REQUEST['submit1'])){
 $uid=$_POST['id'];
 
 $card=$_REQUEST['card'];

 $expiry=$_REQUEST['expiry'];
 
 $ccv=$_REQUEST['ccv'];

	$sqll= "INSERT INTO payment(card,expiry,ccv)VALUE('$card','$expiry','$ccv')";
	
	 $result1 = mysqli_query($conn,$sqll);
	
	

 header('location:payment.php');
}

	if(isset($_REQUEST['update'])){
 $id=$_POST['id'];
 
 $card=$_REQUEST['card'];

 $expiry=$_REQUEST['expiry'];
 
 $ccv=$_REQUEST['ccv'];

	$sqll= "UPDATE payment SET card='$card',expiry='$expiry',ccv='$ccv' WHERE id='$id'";
	
	 $result1 = mysqli_query($conn,$sqll);

 header('location:dashborad1.php');
}
?>