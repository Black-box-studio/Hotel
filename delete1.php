<?php
include('dbconnection.php');

if($_REQUEST['table']=="reservation_1"){
	
 $id=$_REQUEST['id'];

$sql = "delete from reservation_1 where id='$id'";

$result = mysqli_query($conn, $sql);

header('location:dashborad1.php');

}
?>