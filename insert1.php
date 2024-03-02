<?php 

	include('dbconnection.php');

	if(isset($_REQUEST['submit1']))
{
	
    $logo=$_REQUEST['logo'];
     $email=$_REQUEST['email'];
	 $number=$_REQUEST['number'];
	 
  $sql1 = "UPDATE logo SET logo='$logo',email='$email',number='$number'";

    $results1 = mysqli_query($conn,$sql1);

	header('location:home1.php'); // to redirect page 
}
 if(isset($_REQUEST['submit2']))
    {     
		$content1=$_REQUEST['content1'];
		$content2=$_REQUEST['content2'];
					
          $filename = $_FILES["picture"]["name"]; 
            $tempname = $_FILES["picture"]["tmp_name"]; 
			$folder = "./image/" . $filename; 
           move_uploaded_file($tempname, $folder);
		
		 $sql2 = "UPDATE main_content SET content1='$content1',content2='$content2',picture='$filename'";
         $results=mysqli_query($conn,$sql2);
		
        header("location:home1.php");
		
    }
	if(isset($_REQUEST['submit3']))
    {     
		$content3=$_REQUEST['content3'];
		$content4=$_REQUEST['content4'];
				
       $filename1 = $_FILES["picture1"]["name"];
         $tempname1 = $_FILES["picture1"]["tmp_name"];
         $folder1 = "./img/" . $filename1;
         move_uploaded_file($tempname1, $folder1);
 
		 $sql3 = "UPDATE main_content_1 SET content3='$content3',content4='$content4',picture1='$filename1'";
	
         $results1=mysqli_query($conn,$sql3);
		
        header("location:home1.php");
		
    }
	if(isset($_REQUEST['submit4']))
	{
	
    $line1=$_REQUEST['line1'];
     $line2=$_REQUEST['line2'];
	 $line3=$_REQUEST['line3'];
	  
	$sql2 = "UPDATE home_body SET line1='$line1',line2='$line2',line3='$line3'";

    $results2 = mysqli_query($conn,$sql2);

	header('location:home1.php'); // to redirect page 
	}
	if(isset($_REQUEST['submit5']))
	{
	
    $line4=$_REQUEST['line4'];
     $line5=$_REQUEST['line5'];
	 $line6=$_REQUEST['line6'];
	 
		
	
	$sql3 = "UPDATE client_comments_1 SET line4='$line4',line5='$line5',line6='$line6'";

    $results3 = mysqli_query($conn,$sql3);

	header('location:home1.php'); // to redirect page 
	}
	
	if(isset($_REQUEST['submit6']))
	{
	
    $line7=$_REQUEST['line7'];
     $line8=$_REQUEST['line8'];
	 $line9=$_REQUEST['line9'];
	 

	$sql4 = "UPDATE client_comments_2 SET line7='$line7',line8='$line8',line9='$line9'";

    $results4 = mysqli_query($conn,$sql4);

	header('location:home1.php'); // to redirect page 
	}
	
	
	if(isset($_REQUEST['submit7']))
	{
	
    $line10=$_REQUEST['line10'];
     $line11=$_REQUEST['line11'];
	 $line12=$_REQUEST['line12'];
	 

	$sql5 = "UPDATE client_comments_3 SET line10='$line10',line11='$line11',line12='$line12'";

    $results5 = mysqli_query($conn,$sql5);

	header('location:home1.php'); // to redirect page 
	}
?>