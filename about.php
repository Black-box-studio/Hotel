
<?php include("header.php");
	include('dbconnection.php');
	$sql0="SELECT * FROM logo";
	$sql1="SELECT * FROM about_content";
	$sql2="SELECT * FROM staff_details";
	$sql3="SELECT * FROM about_photos";
	$sql4="SELECT * FROM staff_1";
	$sql5="SELECT * FROM staff_2";
	$sql6="SELECT * FROM staff_3";
	$sql7="SELECT * FROM staff_4";
	
	$sql00=mysqli_query($conn,$sql0);
	$sql11=mysqli_query($conn,$sql1);
	$sql12=mysqli_query($conn,$sql2);
	$sql13=mysqli_query($conn,$sql3);
	$sql14=mysqli_query($conn,$sql4);
	$sql15=mysqli_query($conn,$sql5);
	$sql16=mysqli_query($conn,$sql6);
	$sql17=mysqli_query($conn,$sql7);

?>
       
  <!-- Page Header Start -->
		<?php while($row = mysqli_fetch_array($sql11)) { ?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(./image/<?php echo $row['picture2']; ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['comment']; ?></h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
		<?php } ?>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
					 <?php while($row = mysqli_fetch_array($sql00)) { ?>
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase"><?php echo $row['logo']; ?></span></h1>
					 <?php } ?>	
					  
					  <?php while($row = mysqli_fetch_array($sql12)) { ?>
                        <p class="mb-4"><?php echo $row['para']; ?></p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $row['rooms']; ?></h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $row['staffs']; ?></h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $row['clients']; ?></h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>	
                    </div>
                    <div class="col-lg-6">
					 <?php while($row = mysqli_fetch_array($sql13)) { ?>
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="./img/<?php echo $row['pic1']; ?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="./img/<?php echo $row['pic2']; ?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="./img/<?php echo $row['pic3']; ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="./img/<?php echo $row['pic4']; ?>">
                            </div>
                        </div>
					<?php } ?>	
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					 <?php while($row = mysqli_fetch_array($sql14)) { ?>
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic5']; ?>" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $row['name1']; ?></h5>
                                <small><?php echo $row['jobrole1']; ?></small>
                            </div>
                        </div>
					 <?php } ?>		
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
					<?php while($row = mysqli_fetch_array($sql15)) { ?>
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic6']; ?>" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $row['name2']; ?></h5>
                                <small><?php echo $row['jobrole2']; ?></small>
                            </div>
                        </div>
					 <?php } ?>			
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
					<?php while($row = mysqli_fetch_array($sql16)) { ?>
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic7']; ?>" " alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $row['name3']; ?></h5>
                                <small><?php echo $row['jobrole3']; ?></small>
                            </div>
                        </div>
					 <?php } ?>			
                    </div>
					<?php while($row = mysqli_fetch_array($sql17)) { ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic8']; ?>" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $row['name4']; ?></h5>
                                <small><?php echo $row['jobrole4']; ?></small>
                            </div>
                    </div>
					 <?php } ?>		
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
		<br>
		<br>
		<br>
		<br>
       <?php include("footer.php")?>