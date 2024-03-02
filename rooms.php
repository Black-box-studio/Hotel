<?php include("header.php");
	$sql1="SELECT * FROM rooms_front";
	$sql2="SELECT * FROM single_room";
	$sql3="SELECT * FROM duble_room";
	$sql4="SELECT * FROM triple_room";
	$sql5="SELECT * FROM executive_suite";
	$sql6="SELECT * FROM junior_suite";
	$sql7="SELECT * FROM deluxe_suite";

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
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(./img/<?php echo $row['pic1']; ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['frontcomment']; ?></h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
		<?php } ?>	
        <!-- Page Header End -->


       

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
				<?php while($row = mysqli_fetch_array($sql12)) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic2']; ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature']; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>	
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<?php while($row = mysqli_fetch_array($sql13)) { ?>	
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic3']; ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate1']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname1']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed1']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath1']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi1']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature1']; ?></p>
                                <div class="d-flex justify-content-between">

                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
					<?php } ?>		
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<?php while($row = mysqli_fetch_array($sql14)) { ?>	
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic4']; ?>"  alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate2']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname2']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed2']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath2']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi2']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature2']; ?></p>
                                <div class="d-flex justify-content-between">
                                   
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
					<?php } ?>			
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
						<?php while($row = mysqli_fetch_array($sql15)) { ?>	
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic6']; ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate3']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname3']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed3']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath3']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi3']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature3']; ?></p>
                                <div class="d-flex justify-content-between">

                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
						<?php } ?>		
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<?php while($row = mysqli_fetch_array($sql16)) { ?>	
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic7']; ?>"  alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate4']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname4']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed4']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath4']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi4']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature4']; ?></p>
                                <div class="d-flex justify-content-between">
                                  
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
					<?php } ?>			
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
					<?php while($row = mysqli_fetch_array($sql17)) { ?>	
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/<?php echo $row['pic8']; ?>"  alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['rate5']; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['roomname5']; ?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['bed5']; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath5']; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i><?php echo $row['wifi5']; ?></small>
                                </div>
                                <p class="text-body mb-3"><?php echo $row['feature5']; ?></p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>			
                </div>
            </div>
        </div>
        <!-- Room End -->
<br>
<br>
<br>

       

       

        <?php include("footer.php")?>
		