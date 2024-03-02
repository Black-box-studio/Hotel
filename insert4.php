<?php
		include("dbconnection.php");
		
			if(isset($_REQUEST['submit1']))
    {
        $frontcomment=$_REQUEST['frontcomment'];
		
	
           $filename= $_FILES["pic1"]["name"]; 
            $tempname = $_FILES["pic1"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
		$sql1="UPDATE rooms_front SET frontcomment='$frontcomment',pic1='$filename'";
      
        $result1=mysqli_query($conn,$sql1);
        header("location:rooms1.php");
		
    }
		if(isset($_REQUEST['submit2']))
    {
         $rate=$_REQUEST['rate'];
		 $roomname=$_REQUEST['roomname'];
		 $bed=$_REQUEST['bed'];
		 $bath=$_REQUEST['bath'];
		 $wifi=$_REQUEST['wifi'];
		 $feature=$_REQUEST['feature'];
		
			 
		   $filename= $_FILES["pic2"]["name"]; 
           $tempname = $_FILES["pic2"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
		$sql4="UPDATE single_room SET rate='$rate',roomname='$roomname',bed='$bed',bath='$bath',wifi='$wifi',feature='$feature',pic2='$filename'";
      
        $result2=mysqli_query($conn,$sql4);
        header("location:rooms1.php");
		
    }
	if(isset($_REQUEST['submit3']))
    {
         $rate1=$_REQUEST['rate1'];
		 $roomname1=$_REQUEST['roomname1'];
		 $bed1=$_REQUEST['bed1'];
		 $bath1=$_REQUEST['bath1'];
		 $wifi1=$_REQUEST['wifi1'];
		 $feature1=$_REQUEST['feature1'];
		
		   $filename1= $_FILES["pic3"]["name"]; 
           $tempname1 = $_FILES["pic3"]["tmp_name"]; 
			$folder = "./img/" . $filename1; 
           move_uploaded_file($tempname1, $folder);
			
		$sql5="UPDATE duble_room SET rate1='$rate1',roomname1='$roomname1',bed1='$bed1',bath1='$bath1',wifi1='$wifi1',feature1='$feature1',pic3='$filename1'";
      
        $result2=mysqli_query($conn,$sql5);
        header("location:rooms1.php");
		
    }
	if(isset($_REQUEST['submit4']))
    {
         $rate2=$_REQUEST['rate2'];
		 $roomname2=$_REQUEST['roomname2'];
		 $bed2=$_REQUEST['bed2'];
		 $bath2=$_REQUEST['bath2'];
		 $wifi2=$_REQUEST['wifi2'];
		 $feature2=$_REQUEST['feature2'];
				 
		   $filename2= $_FILES["pic4"]["name"]; 
           $tempname2 = $_FILES["pic4"]["tmp_name"]; 
			$folder = "./img/" . $filename2; 
           move_uploaded_file($tempname2, $folder);
			
		$sql6="UPDATE triple_room SET rate2='$rate2',roomname2='$roomname2',bed2='$bed2',bath2='$bath2',wifi2='$wifi2',feature2='$feature2',pic4='$filename2'";
      
        $result3=mysqli_query($conn,$sql6);
        header("location:rooms1.php");
		
    }
	if(isset($_REQUEST['submit5']))
    {
         $rate3=$_REQUEST['rate3'];
		 $roomname3=$_REQUEST['roomname3'];
		 $bed3=$_REQUEST['bed3'];
		 $bath3=$_REQUEST['bath3'];
		 $wifi3=$_REQUEST['wifi3'];
		 $feature3=$_REQUEST['feature3'];
				 
		   $filename3= $_FILES["pic6"]["name"]; 
           $tempname3 = $_FILES["pic6"]["tmp_name"]; 
			$folder = "./img/" . $filename3; 
           move_uploaded_file($tempname3, $folder);
			
		 $sql7="UPDATE executive_suite SET rate3='$rate3',roomname3='$roomname3',bed3='$bed3',bath3='$bath3',wifi3='$wifi3',feature3='$feature3',pic6='$filename3'";
      
        $result4=mysqli_query($conn,$sql7);
        header("location:rooms1.php");
		
    }
		
		if(isset($_REQUEST['submit6']))
    {
         $rate4=$_REQUEST['rate4'];
		 $roomname4=$_REQUEST['roomname4'];
		 $bed4=$_REQUEST['bed4'];
		 $bath4=$_REQUEST['bath4'];
		 $wifi4=$_REQUEST['wifi4'];
		 $feature4=$_REQUEST['feature4'];
		
	
		   $filename4= $_FILES["pic7"]["name"]; 
           $tempname4= $_FILES["pic7"]["tmp_name"]; 
			$folder = "./img/" . $filename4; 
           move_uploaded_file($tempname4, $folder);
			
		 $sql8="UPDATE junior_suite SET rate4='$rate4',roomname4='$roomname4',bed4='$bed4',bath4='$bath4',wifi4='$wifi4',feature4='$feature4',pic7='$filename4'";
      
        $result5=mysqli_query($conn,$sql8);
        header("location:rooms1.php");
		
    }
	if(isset($_REQUEST['submit7']))
    {
         $rate5=$_REQUEST['rate5'];
		 $roomname5=$_REQUEST['roomname5'];
		 $bed5=$_REQUEST['bed5'];
		 $bath5=$_REQUEST['bath5'];
		 $wifi5=$_REQUEST['wifi5'];
		 $feature5=$_REQUEST['feature5'];
		      
		   $filename5= $_FILES["pic8"]["name"]; 
           $tempname5= $_FILES["pic8"]["tmp_name"]; 
			$folder = "./img/" . $filename5; 
           move_uploaded_file($tempname5, $folder);
			
		 $sql9="UPDATE deluxe_suite SET rate5='$rate5',roomname5='$roomname5',bed5='$bed5',bath5='$bath5',wifi5='$wifi5',feature5='$feature5',pic8='$filename5'";
      
        $result6=mysqli_query($conn,$sql9);
        header("location:rooms1.php");
		
    }
?>