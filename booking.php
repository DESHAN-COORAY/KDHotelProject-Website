<!DOCTYPE html>
<html>
<head>
	<title>KD HOTEL | Booking Details</title>

	<?php require('inc/links.php'); ?>

  <!-- Favicons -->
  	<link href="images/kd.jpg" rel="icon" class="">

  <!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<style>
	.pop:hover{
		border-top-color: var(--teal) !important;
		transform: scale(1.03);
		transition: all 0.3s;
	}
	</style>
	
  <!-- JavaScript File -->
	<script src="./javaScript/bookingValidationExternal.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
	   		$("#bCheckInDate").datepicker({
   				minDate: 0
			});
	  	});
  	</script>
	<script>
  		$( function() {
			$("#bCheckOutDate").datepicker({
	   			minDate: 0
	   		});
  		});
	</script>
	
	<!-- < ?php
		session_start();                            
	?> -->

</head>
<body>

	<?php require('inc/header.php'); ?>

	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">PAYMENT AND GUEST DETAILS</h2>
		<div class="h-line bg-dark"></div>
	</div>

	<?php 
		// Check Room id set 
		if(isset($_GET['r_id'])){

				//Room id set
				$id = $_GET['r_id'];
				
				// Get the details of the Room
				$sql = "SELECT * FROM table_rooms WHERE r_id = '$id'";

				// execute the query
				$result = mysqli_query($conn,$sql);

				// check Query executed
				if($result==TRUE){

					// count rows
					$count = mysqli_num_rows($result);

					// check data is available
					if($count==1){

						// table has data
						// get the data from database
						$row = mysqli_fetch_assoc($result);

						//Get the values of room
						$Room_name = $row['room_name'];
						$Price = $row['price'];
					}
					else{
						?>
							<br>
							<script src="./javaScript/sweetalert.min.js"></script>
							<script>
								swal({
									title: "Sorry!",
									text: "Can not Find Data!",
									icon: "error"
								}).then(function(){
									window.location.href = "";
									console.log('The Ok Button was clicked.');
								});
							</script>
						<?php
					}
				}
		}
		else{
			// can not find Room id
		}
	?>

	<div class="container-fluid px-lg-5 mt-4">
		<br>
		<form method="POST" name="form1" onsubmit="return checkBookingValidation()" action="receipt.php">
			<hr>
			<div class="row">
				<div class="col-lg-1 ps-2 mt-1 mb-2">
					<h5><b>You Stay</b></h5>
				</div>
				<div class="col-md-3 ps-0 mb-3">
					<input type="text" name="bCheckInDate" id="bCheckInDate" placeholder="Check-in date" class="form-control shadow-none" />
					<span id="bookingcidateerror"> </span>
				</div>
				<div class="col-1 ps-2 mt-1 mb-2">
					<h5><b>&emsp; to</b></h5>
				</div>
				<div class="col-md-3 ps-0 mb-3">
					<input type="text" name="bCheckOutDate" id="bCheckOutDate" placeholder="Check-out date" class="form-control shadow-none" />
					<span id="bookingcodateeerror"> </span>
				</div>
				<div class="col-1 ps-2 mt-1 mb-2">
					<h5><b>&ensp; For</b></h5>
				</div>
				<div class="col-md-3 ps-0 mb-3">
					<select name="bQuantity" id="bQuantity" class="form-select shadow-none">
						<option value="1 Adults">1 Adults</option>
						<option value="2 Adults">2 Adults</option>
						<option value="2 Adults & 1 Children">2 Adults & 1 Children</option>
						<option value="3 Adults & 2 Children">3 Adults & 2 Children</option>
						<option value="5 Adults & 4 Children">5 Adults & 4 Children</option>
						<option value="Morw than 5 Adults & 4 Children">More than 5 Adults & 4 Children</option>
					</select>
					<span id="bookingQuantityError"> </span>
				</div>
				<div class="col-lg-1 ps-2 mt-1 mb-2">
					<h5><b>Room</b></h5>
				</div>
				<div class="col-md-3 ps-0 mb-3">
					<input type="text" name="bRoomName" id="bRoomName" value="<?php echo $Room_name; ?>" class="form-control shadow-none" readonly />
					<span id="bookingrnameerror"> </span>
				</div>
				<div class="col-1 ps-2 mt-1 mb-2">
					<h5><b>&emsp; Price</b></h5>
				</div>
				<div class="col-md-3 ps-0 mb-3">
					<input type="text" name="bPrice" id="bPrice" value="<?php echo $Price; ?>" class="form-control shadow-none" readonly />
					<span id="bookingpriceerror"> </span>
				</div>
			</div>
			<hr>
			<br>

			<h5 class="col-lg-3"><i class="bi bi-pay"></i><b> Payment</b></h5>
			<hr>

			<div class="row">
					<div class="col-md-6 ps-2 mb-3"> 
						<label class="form-label">Card Number</label>
						<input name="bCNumber" id="bCNumber" type="text" placeholder="Ex: 1111 2222 3333 4444" class="form-control shadow-none">
						<span id="bookingCNumberError"> </span>
					</div>
				<div class="col-md-3 ps-3 mb-3">
						<label class="form-label">Expiry</label>
						<input name="bExpiry" id="bExpiry" type="text" placeholder="Ex: 01/23" class="form-control shadow-none">
						<span id="bookingCExpiryError"> </span>
					</div>
				<div class="col-md-3 ps-3 mb-3">
						<label class="form-label">CVC</label>
						<input name="bCVC" id="bCVC" type="password" placeholder="Ex: 123" class="form-control shadow-none">
						<span id="bookingCCVCError"> </span>
					</div>
			</div>
			</div>

			<div class="container-fluid px-lg-5 mt-4">
			<h5 class="col-lg-3"><i class="bi bi-person"></i><b> Guest Information</b></h5>
			<hr>

			<div class="row">
					<div class="col-md-6 ps-2 mb-3"> 
						<label class="form-label">Full Name</label>
						<input name="bFName" id="bFName" type="text" placeholder="Ex: V. K. D. Cooray" class="form-control shadow-none">
						<span id="bookingNameError"> </span>
					</div>
				<div class="col-md-3 ps-3 mb-3">
						<label class="form-label">Email</label>
						<input name="bEmail" id="bEmail" type="text" placeholder="Ex: kalpa@gmail.com" class="form-control shadow-none">
						<span id="bookingEmailError"> </span>
					</div>
				<div class="col-md-3 ps-3 mb-3">
						<label class="form-label">Phone Number</label>
						<input name="bPhone" id="bTelephone" type="text" placeholder="Ex: 0112729729" class="form-control shadow-none">
						<span id="bookingPhoneError"> </span>
					</div>
				<div class="col-md-8 ps-2 mb-3">
						<label class="form-label">Address</label>
						<input name="bAddress" id="bAddress" type="text" placeholder="Ex: No.1, Main Road, Colombo-1." class="form-control shadow-none">
						<span id="bookingAddressError"> </span>
					</div>
				<div class="col-md-4 ps-3 mb-3"> 
						<label class="form-label">Country</label>
						<input name="bCountry" id="bCountry" type="text" placeholder="Ex: Sri Lanka" class="form-control shadow-none">
						<span id="bookingCountryError"> </span>
					</div>
				<div class="col-md-4 ps-2 mb-3">
						<label class="form-label">State</label>
						<input name="bState" id="bState" type="text" placeholder="Ex: Western Province" class="form-control shadow-none">
						<span id="bookingStateError"> </span>
					</div>
				<div class="col-md-4 ps-2 mb-3">
						<label class="form-label">City</label>
						<input name="bCity" id="bCity" type="text" placeholder="Ex: Colombo-1" class="form-control shadow-none">
						<span id="bookingCityError"> </span>
					</div>
				<div class="col-md-4 ps-2 mb-3">
						<label class="form-label">Zip</label>
						<input name="bZip" id="bZip" type="text" placeholder="Ex: 10001" class="form-control shadow-none">
						<span id="bookingZipError"> </span>
					</div>
			</div>
			</div>

			<div class="container-fluid px-lg-5 mt-4">
				<h5 class="col-lg-3"><b> Guarantee and Cancellation Policy</b></h5>
				<hr>
				<p class="text-left mt-3">
				There is a credit card required for this reservation. Free cancellation one day before the check-in date.<br><br>
				By clicking "Book Reservation," I agree to the <a href="Rules_and_Restrictions.php" class="link-info shadow-none">Rules and Restrictions</a>, 
				<a href="Site_Usage_Agreement.php" class="link-info shadow-none">Site Usage Agreement</a>, and agree that KD Hotel will collect, 
				use, share and transfer my information as set out in <a href="Global_Privacy_Statement.php" class="link-info shadow-none">KD Hotel’s Global Privacy 
				Statement</a>.<br><br>
				I also agree to the <a href="Terms_and_Conditions.php" class="link-info shadow-none">KD Hotel Terms and Conditions</a>.
				</p>
				<div class="text-left my-1">
					<button name="rBook" id="rBook" type="submit" class="btn btn-white text-white shadow-none custom-bg mt-3 col-lg-4"><b>B o o k&emsp; 
						R e s e r v a t i o n</b></button>
				</div>
			</div>
		</form>
	</div>

	<?php require('inc/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>