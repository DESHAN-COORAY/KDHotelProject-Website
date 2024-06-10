<!DOCTYPE html>
<html>
<head>
	<title>KD Hotel</title>

	<?php require('inc/links.php'); ?>
	
  <!-- Favicons -->
	<link href="images/kd.jpg" rel="icon" class="">

  <!-- CSS only -->
	<style type="text/css">
		
		.availability-form{
			margin-top: -50px;
			z-index: 2;
			position: relative;
		}

		@media screen and (max-width: 575px) {
			.availability-form{
				margin-top: 25px;
				padding: 0 35px;
			}
		}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">

  <!-- JavaScript Files -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</head>
<body>

 <?php require('inc/header.php'); ?>

  <!-- Swiper Carousal-->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/carousel/1.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/2.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/3.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/4.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/5.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/6.png" class="w-100 d-block" />
				</div>
			</div>
		</div>
	</div>

  <!-- check avilability form-->
	<div class="container availability-form">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rounded">
				<h5 class="col-lg-3"><b>Check Booking Availability</b></h5>
				<form method="POST">
					<div class="row align-items-end">
						<div class="col-lg-6 mb-3">
							<label class="form-label" style="font-weight: 500;">Room</label>
							<select class="form-select shadow-none" name="aRName" id="aRName" placeholder="Select Your Favour">
								<option value="Deluxe Room City Facing">Deluxe Room City Facing</option>
								<option value="Deluxe Room Ocean Facing">Deluxe Room Ocean Facing</option>
								<option value="Luxury Room City View">Luxury Room City View</option>
								<option value="Luxury Room Ocean View">Luxury Room Ocean View</option>
								<option value="KD Club Room City View">KD Club Room City View</option>
								<option value="KD Club Room Ocean View">KD Club Room Ocean View</option>
								<option value="Deluxe One Bed Room Suite City View">Deluxe One Bed Room Suite City View</option>
								<option value="Grand Luxury Suite">Grand Luxury Suite</option>
								<option value="Executive 1 Bed Room Suite Ocean View">Executive 1 Bed Room Suite Ocean View</option>
								<option value="Tata Suite">Tata Suite</option>
							</select>
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Adult</label>
							<select class="form-select shadow-none">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								<option value="4">Four</option>
								<option value="5">Five</option>
							</select>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Children</label>
							<select class="form-select shadow-none">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								<option value="4">Four</option>
							</select>
						</div>
						<div class="col-lg-1 mb-lg-3 mt-2">
							<button type="submit" name="aSubmit" id="aSubmit" class="btn text-white shadow-none custom-bg">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

  <!-- Room Availability PHP Start -->
	<?php
		// Check submit button clicked or not 
		if(isset($_POST['aSubmit'])) {

			// Get data from the form
			$aRoomName = $_POST['aRName'];

	?>
		<script>
			alert($aRoomName);
		</script>
	<?php
			// Create SQL Query to get the Details
			$sql= "SELECT * FROM table_rooms WHERE room_name = '$aRoomName'";

			// Execute the Query
			$result= mysqli_query($conn, $sql);

			// check Query executed
			if($result==TRUE){

				//check the data rows is available
				$count = mysqli_num_rows($result); 

				//check admin data
				if($count==1){

					// Get the data
					$row=mysqli_fetch_assoc($result);

					$availability = $row['availability'];

					if($availability=='yes'){
	?>
						<br>
						<script src="./javaScript/sweetalert.min.js"></script>
						<script>
							swal({
								title: "Hurray!",
								text: "Room Available for You!",
								icon: "info"
							}).then(function(){
								window.location.href = "index.php";
								console.log('The Ok Button was clicked.');
							});
						</script>
	<?php
					}
					elseif($availability=='no'){
	?>
						<br>
						<script src="./javaScript/sweetalert.min.js"></script>
						<script>
							swal({
								title: "Sorry!",
								text: "Room isn't Available at This Time!",
								icon: "info"
							}).then(function(){
								window.location.href = "index.php";
								console.log('The Ok Button was clicked.');
							});
						</script>
	<?php
					}
				}
			}
		}
	?>
  <!-- Room Availability PHP End -->
 
  <!-- Our Rooms -->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 340px; margin: auto;">
					<img src="images/rooms/Deluxe_Room_Ocean_Facing.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Deluxe Room Ocean Facing</h5>
						<br>

						<?php 
				
							// Create SQL Query to get the Details
							$sql= "SELECT * FROM table_rooms WHERE r_id = '2/DRO'";

							// Execute the Query
							$result= mysqli_query($conn, $sql);

							// check Query executed
							if($result==TRUE){

								//check the data rows is available
								$count = mysqli_num_rows($result); 

								//check room data
								if($count==1){

									// Get the data
									$row=mysqli_fetch_assoc($result);

									$id = $row['r_id'];
									$price = $row['price'];
								}
								else{
									
								}
							}
						?>

						<h6 class="mb-4"><b>$<?php echo $price;?>*</b></h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								35 Sq Mt
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>
						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
						</div>
						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-evenly mb-2">
							<a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
							<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 340px; margin: auto;">
					<img src="images/rooms/Luxury_Room_Ocean_View.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Luxury Room Ocean View</h5>
						<br>

						<?php 
				
							// Create SQL Query to get the Details
							$sql= "SELECT * FROM table_rooms WHERE r_id = '4/LRO'";

							// Execute the Query
							$result= mysqli_query($conn, $sql);

							// check Query executed
							if($result==TRUE){

								//check the data rows is available
								$count = mysqli_num_rows($result); 

								//check room data
								if($count==1){

									// Get the data
									$row = mysqli_fetch_assoc($result);

									$id = $row['r_id'];
									$price = $row['price'];
								}
								else{
									
								}
							}
						?>

						<h6 class="mb-4"><b>$<?php echo $price;?>*</b></h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								35 Sq Mt
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
							<br><br>
							<!-- </div> -->

							<div class="guests mb-4">
								<h6 class="mb-1">Guests</h6>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									3 Adults
								</span>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									2 Children
								</span>
							</div>	
							<div class="rating mb-4">
								<h6 class="mb-1">Rating</h6>
								<span class="badge rounded-pill bg-light">
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
								</span>
							</div>
							<div class="d-flex justify-content-evenly mb-2">
								<a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
								<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 340px; margin: auto;">
					<img src="images/rooms/Deluxe_One_Bed_Room_Suite_City_View.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Deluxe One Bed Room Suite City View</h5>

						<?php 
				
							// Create SQL Query to get the Details
							$sql= "SELECT * FROM table_rooms WHERE r_id = '7/DOBC'";

							// Execute the Query
							$result= mysqli_query($conn, $sql);

							// check Query executed
							if($result==TRUE){

								//check the data rows is available
								$count = mysqli_num_rows($result); 

								//check room data
								if($count==1){

									// Get the data
									$row=mysqli_fetch_assoc($result);

									$id = $row['r_id'];
									$price = $row['price'];
								}
								else{
									
								}
							}
						?>

						<h6 class="mb-4"><b>$<?php echo $price;?>*</b></h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								65 Sq Mt
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>
						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Children
							</span>
						</div>
						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-evenly mb-2">
							<a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
							<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 text-center mt-5">
				<a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
			</div>
		</div>	
	</div>

  <!-- Our Facilities-->
 	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

	<div class="container">
		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/swimming_pool.png" width="80px">
				<h5 class="mt-3">Swimming Pool</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/massage.png" width="80px">
				<h5 class="mt-3">Body Care & Massage</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/gym.png" width="80px">
				<h5 class="mt-3">Gymnasium</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/Launderette.png" width="80px">
				<h5 class="mt-3">Launderette</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
			</div>
		</div>
	</div>

  <!-- Testimonials -->
 	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

	<div class="container mt-5">
		<!-- Swiper -->
		<div class="swiper swiper-testimonials">
			<div class="swiper-wrapper mb-5">
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/facilities/stars.png" width="30px">
						<h6 class="m-0 ms-2">Bernard Arnault</h6>
					</div>
					<p>
						"Awesome location,excellent choice of food across a diverse range of cuisine, courteous and friendly staff, 
						strong systems in place, fast check-in and checkout ..all in all a home away from home experience."
						<br><br>
						--June 2022--
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>

				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/facilities/stars.png" width="30px">
						<h6 class="m-0 ms-2">TRD Perera</h6>
					</div>
					<p>
						"This was our first stop of our 12 day holiday in Sri Lanka. 
						The hotel is in an ideal location near to the sea shore and promenade where in the evening there is a good selection of street food stalls. 
						The breakfast buffet was an amazing sight the largest display I have ever seen, wonderful choice of everything you could wish to have."
						<br><br>
						--August 2022--
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>

				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/facilities/stars.png" width="30px">
						<h6 class="m-0 ms-2">Lionel Andrés Messi</h6>
					</div>
					<p>
						"They offer delicious food, good customer service. 
						Good surroundings. Front facing the Galle Face green. Located in an urban area in Sri Lanka. Luxury hotel with good food. 
						Perfect location for weddings as well."
						<br><br>
						--September 2022--
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

  <!-- REach us-->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LOCATION</h2>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
			<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/place/The+Kingsbury+Colombo/@6.9292556,79.8490837,15.47z/data=!4m8!3m7!
				1s0x3ae259259a6157fb:0x8c0cebb288af4419!5m2!4m1!1i2!8m2!3d6.9328529!4d79.8419406" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
			</div>
		</div>
	</div>

 	<?php require('inc/footer.php') ?>

  <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: false, //true
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>