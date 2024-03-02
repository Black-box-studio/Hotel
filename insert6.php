<?php
		include("dbconnection.php");
		
	if(isset($_REQUEST['submit1']))
    {
        $frontcomment=$_REQUEST['frontcomment'];
		
	
           $filename= $_FILES["pic1"]["name"]; 
            $tempname = $_FILES["pic1"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
		$sql1="UPDATE contact_front_image SET frontcomment='$frontcomment',pic1='$filename'";
      
        $result1=mysqli_query($conn,$sql1);
        header("location:contact1.php");
		
    }
	if(isset($_REQUEST['submit2']))
    {
		$bookingmail=$_REQUEST['bookingmail'];
        $generalmail=$_REQUEST['generalmail'];
		$technicalmail=$_REQUEST['technicalmail'];
		
		$sql2="UPDATE mails SET bookingmail='$bookingmail',generalmail='$generalmail',technicalmail='$technicalmail'";
      
        $result2=mysqli_query($conn,$sql2);
        header("location:contact1.php");
		
    }
?>	