<?php
		include("dbconnection.php");

		if(isset($_REQUEST['submit1']))
    {
        $comment=$_REQUEST['comment'];
	
           $filename= $_FILES["pic1"]["name"]; 
            $tempname = $_FILES["pic1"]["tmp_name"]; 
			$folder = "./img/" . $filename; 
           move_uploaded_file($tempname, $folder);
			
		$sql1="UPDATE service SET comment='$comment',pic1='$filename'";
      
        $result1=mysqli_query($conn,$sql1);
        header("location:service1.php");
		
    }

	
		if(isset($_REQUEST['submit2']))
    {
        $content1=$_REQUEST['content1'];
		$content2=$_REQUEST['content2'];
		
		
		$sql2="UPDATE service_1 SET content1='$content1',content2='$content2'";
      
        $result2=mysqli_query($conn,$sql2);
        header("location:service1.php");
		
    }

	if(isset($_REQUEST['submit3']))
    {
        $para1=$_REQUEST['para1'];
		$para2=$_REQUEST['para2'];
		
		 $sql3="UPDATE service_room SET para1='$para1',para2='$para2'";
        $result3=mysqli_query($conn,$sql3);
        header("location:service1.php");
		
    }
	if(isset($_REQUEST['submit4']))
    {
        $para3=$_REQUEST['para3'];
		$para4=$_REQUEST['para4'];
		
		 $sql4="UPDATE service_food SET para3='$para3',para4='$para4'";
        $result4=mysqli_query($conn,$sql4);
        header("location:service1.php");
		
    }
	if(isset($_REQUEST['submit5']))
    {
        $para5=$_REQUEST['para5'];
		$para6=$_REQUEST['para6'];
		
				 
		 $sql5="UPDATE service_fitness SET para5='$para5',para6='$para6'";
        $result5=mysqli_query($conn,$sql5);
        header("location:service1.php");
		
    }
	if(isset($_REQUEST['submit6']))
    {
        $para7=$_REQUEST['para7'];
		$para8=$_REQUEST['para8'];
		 
		 $sql6="UPDATE service_sports SET para7='$para7',para8='$para8'";
        $result6=mysqli_query($conn,$sql6);
        header("location:service1.php");
		
    }
	if(isset($_REQUEST['submit7']))
    {
        $para9=$_REQUEST['para9'];
		$para10=$_REQUEST['para10'];
		 
		 $sql7="UPDATE service_event SET para9='$para9',para10='$para10'";
        $result7=mysqli_query($conn,$sql7);
        header("location:service1.php");
		
    }
	if(isset($_REQUEST['submit8']))
    {
        $para11=$_REQUEST['para11'];
		$para12=$_REQUEST['para12'];
		
		 $sql8="UPDATE service_yoga SET para11='$para11',para12='$para12'";
        $result8=mysqli_query($conn,$sql8);
        header("location:service1.php");
		
    }
?>