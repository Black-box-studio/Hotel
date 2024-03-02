
<?php include("header.php");
	$sql1="SELECT * FROM service";
	$sql2="SELECT * FROM service_1";
	$sql3="SELECT * FROM service_room";
	$sql4="SELECT * FROM service_food";
	$sql5="SELECT * FROM service_fitness";
	$sql6="SELECT * FROM service_sports";
	$sql7="SELECT * FROM service_event";
	$sql8="SELECT * FROM service_yoga";
	$sql123="SELECT * FROM client_comments_1";
	$sql124="SELECT * FROM client_comments_2";
	$sql125="SELECT * FROM client_comments_3";
	


	$sql11=mysqli_query($conn,$sql1);
	$sql12=mysqli_query($conn,$sql2);
	$sql13=mysqli_query($conn,$sql3);
	$sql14=mysqli_query($conn,$sql4);
	$sql15=mysqli_query($conn,$sql5);
	$sql16=mysqli_query($conn,$sql6);
	$sql17=mysqli_query($conn,$sql7);
	$sql18=mysqli_query($conn,$sql8);
	$sql1123=mysqli_query($conn,$sql123);
	$sql1124=mysqli_query($conn,$sql124);
	$sql1125=mysqli_query($conn,$sql125);
?>

        <!-- Page Header Start -->
		<?php while($row = mysqli_fetch_array($sql11)) { ?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(./img/<?php echo $row['pic1']; ?>);">
		
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['comment']; ?></h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
		<?php } ?>	
        </div>
        <!-- Page Header End --

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
			<?php while($row = mysqli_fetch_array($sql12)) { ?>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase"><?php echo $row['content1']; ?></h6>
                    <h1 class="mb-5"><?php echo $row['content2']; ?> <span class="text-primary text-uppercase">Services</span></h1>
                </div>
			<?php } ?>		
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<?php while($row = mysqli_fetch_array($sql13)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para1']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para2']; ?></p>
                        </a>
					<?php } ?>			
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
				<?php while($row = mysqli_fetch_array($sql14)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para3']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para4']; ?></p>
                        </a>
				<?php } ?>		
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
					<?php while($row = mysqli_fetch_array($sql15	)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para5']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para6']; ?></p>
                        </a>
					<?php } ?>			
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
					<?php while($row = mysqli_fetch_array($sql16)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para7']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para8']; ?></p>
                        </a>
					<?php } ?>		
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
					<?php while($row = mysqli_fetch_array($sql17)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para9']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para10']; ?></p>
                        </a>
					<?php } ?>			
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
					<?php while($row = mysqli_fetch_array($sql18)) { ?>
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $row['para11']; ?></h5>
                            <p class="text-body mb-0"><?php echo $row['para12']; ?></p>
                        </a>
					<?php } ?>			
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


         <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
				<?php while($row = mysqli_fetch_array($sql1123)) { ?>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p><?php echo $row['line4']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><?php echo $row['line5']; ?></h6>
                                <small><?php echo $row['line6']; ?></small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
					<?php } ?>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
					<?php while($row = mysqli_fetch_array($sql1124)) { ?>
                        <p><?php echo $row['line7']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><?php echo $row['line8']; ?></h6>
                                <small><?php echo $row['line9']; ?></small>
                            </div>
                        </div>
					<?php } ?>	
					<?php while($row = mysqli_fetch_array($sql1125)) { ?>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
					
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p><?php echo $row['line10']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><?php echo $row['line11']; ?></h6>
                                <small><?php echo $row['line12']; ?></small>
                            </div>
                        </div>
					
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
					<?php } ?>	
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
	<br>
	<br>

      

       <?php include("footer.php")?>