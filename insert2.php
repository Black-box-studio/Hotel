<?php
	include('dbconnection.php');
	
		if(isset($_REQUEST['submit1']))
	{
	
    $comment=$_REQUEST['comment'];
	
		$filename = $_FILES["picture2"]["name"]; 
            $tempname = $_FILES["picture2"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
	 
  $sql1 = "UPDATE about_content SET comment='$comment',picture2='$filename'";

    $results1 = mysqli_query($conn,$sql1);

	header('location:about1.php'); // to redirect page 
	}

	 if(isset($_REQUEST['submit2']))
    {
        $para=$_REQUEST['para'];
        $rooms=$_REQUEST['rooms'];
        $staffs=$_REQUEST['staffs'];
		$clients=$_REQUEST['clients'];

		 $sql12="UPDATE staff_details SET para='$para',rooms='$rooms',staffs='$staffs',clients='$clients'";
        
        $result2=mysqli_query($conn,$sql12);
        header("location:about1.php");
		
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
		   
		   $sql13="UPDATE about_photos SET pic1='$filename1',pic2='$filename2',pic3='$filename3',pic4='$filename4'";
        
			$result3=mysqli_query($conn,$sql13);
			header("location:about1.php");
		 }
		 
		 
	 if(isset($_REQUEST['submit4']))
    {
			
		
        $name1=$_REQUEST['name1'];
        $jobrole1=$_REQUEST['jobrole1'];
		
        
			$filename= $_FILES["pic5"]["name"]; 
            $tempname = $_FILES["pic5"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
			
		 $sql3="UPDATE staff_1 SET name1='$name1',jobrole1='$jobrole1',pic5='$filename'";
        
        $result3=mysqli_query($conn,$sql3);
        header("location:about1.php");
	}
	
	if(isset($_REQUEST['submit5']))
    {
			
		
        $name2=$_REQUEST['name2'];
        $jobrole2=$_REQUEST['jobrole2'];
		
               
			$filename= $_FILES["pic6"]["name"]; 
            $tempname = $_FILES["pic6"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
			
		 $sql4="UPDATE staff_2 SET name2='$name2',jobrole2='$jobrole2',pic6='$filename'";
        
        $result4=mysqli_query($conn,$sql4);
        header("location:about1.php");
	}
	
	if(isset($_REQUEST['submit6']))
    {
			
		
        $name3=$_REQUEST['name3'];
        $jobrole3=$_REQUEST['jobrole3'];
		
		
			   
			$filename= $_FILES["pic7"]["name"]; 
            $tempname = $_FILES["pic7"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
		
			
		 $sql5="UPDATE staff_3 SET name3='$name3',jobrole3='$jobrole3',pic7='$filename'";
        
        $result5=mysqli_query($conn,$sql5);
        header("location:about1.php");
	}
	
	if(isset($_REQUEST['submit7']))
    {
			
		
        $name4=$_REQUEST['name4'];
        $jobrole4=$_REQUEST['jobrole4'];
		
		
		 
			$filename= $_FILES["pic8"]["name"]; 
            $tempname = $_FILES["pic8"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
		
			
		 $sql6="UPDATE staff_4 SET name4='$name4',jobrole4='$jobrole4',pic8='$filename'";
        
        $result6=mysqli_query($conn,$sql6);
        header("location:about1.php");
	}
?>