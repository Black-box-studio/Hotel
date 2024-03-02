<?php
		include("dbconnection.php");
		
	if(isset($_REQUEST['submit1']))
    {
        $frontcomment=$_REQUEST['frontcomment'];
		
		
           $filename= $_FILES["pic1"]["name"]; 
            $tempname = $_FILES["pic1"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
		$sql1="UPDATE reserv_front_image SET frontcomment='$frontcomment',pic1='$filename'";
      
        $result1=mysqli_query($conn,$sql1);
        header("location:reservation1.php");
		
    }
		
	 if(isset($_REQUEST['submit3']))
		 {
			$filename1= $_FILES["pic1"]["name"]; 
            $tempname1 = $_FILES["pic1"]["tmp_name"]; 
			$folder = "./img/" . $filename1; 
           move_uploaded_file($tempname1, $folder);
			 
			$filename2= $_FILES["pic2"]["name"]; 
            $tempname2 = $_FILES["pic2"]["tmp_name"]; 
			$folder = "./img/" . $filename2; 
           move_uploaded_file($tempname2, $folder);
		   
		   	$filename3= $_FILES["pic3"]["name"]; 
            $tempname3 = $_FILES["pic3"]["tmp_name"]; 
			$folder = "./img/" . $filename3; 
           move_uploaded_file($tempname3, $folder);
		   
		   	$filename4= $_FILES["pic4"]["name"]; 
            $tempname4= $_FILES["pic4"]["tmp_name"]; 
			$folder = "./img/" . $filename4; 
           move_uploaded_file($tempname4, $folder);
		   
		   $sql13="UPDATE reserv_side_image SET pic1='$filename1',pic2='$filename2',pic3='$filename3',pic4='$filename4'";
        
			$result3=mysqli_query($conn,$sql13);
			header("location:reservation1.php");
		 }	
		
		
		
?>