<?php
include('dbconnection.php');

if($_REQUEST['table']=="back"){
	
 $id=$_REQUEST['id'];

$sql = "delete from back where id='$id'";

$result = mysqli_query($conn, $sql);

header('location:dashborad1.php');

}
?>