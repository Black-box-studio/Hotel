<?php
include('dbconnection.php');

if($_REQUEST['table']=="payment"){
	
 $id=$_REQUEST['id'];

$sql = "delete from payment where id='$id'";

$result = mysqli_query($conn, $sql);

header('location:dashborad1.php');

}
?>a