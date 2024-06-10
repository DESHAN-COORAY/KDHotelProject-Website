<?php include('configuration/const.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>KD HOTEL | Receipt</title>

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
	body{
		background-image:url('images/carousel/1.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
	}
	.box{
		width: 700px;
		padding: 10px;
		border-radius: 6px;
		background: #fff;
		box-shadow: 10px 10px 15px 6px #333;
	}
	</style>

	<?php
		session_start();                            
	?>

</head>
<body>

	<?php

		// Check the submit is clicked
		if(isset($_POST['rBook'])) {

			// Get data from the form
			$bRoomName = $_POST['bRoomName'];
			$bPrice = $_POST['bPrice'];

			$CheckInDate = date_create($_POST['bCheckInDate']);
			$bCheckInDate = date_format($CheckInDate,"Y-m-d H:i:s"); // date_format() function returns a date formatted according to the specified format

			$CheckOutDate = date_create($_POST['bCheckOutDate']);
			$bCheckOutDate = date_format($CheckOutDate,"Y-m-d H:i:s"); // date_format() function returns a date formatted according to the specified format

			$bQuantity = $_POST['bQuantity'];
			$bCNumber = $_POST['bCNumber'];
			$bExpiry = $_POST['bExpiry'];
			$bCVC = $_POST['bCVC'];
			$bFName = $_POST['bFName'];
			$bEmail = $_POST['bEmail'];
			$bPhone = $_POST['bPhone'];
			$bAddress = $_POST['bAddress'];
			$bCountry = $_POST['bCountry'];
			$bState = $_POST['bState'];
			$bCity = $_POST['bCity'];
			$bZip = $_POST['bZip'];

			// Check the submit is clicked
			if(isset($_REQUEST['rBook'])){
				$_SESSION['RoomName'] = $_POST['bRoomName'];
				$_SESSION['CheckInDate'] = $_POST['bCheckInDate'];
				$_SESSION['CheckOutDate'] = $_POST['bCheckOutDate'];
				$_SESSION['Quantity'] = $_POST['bQuantity'];
				$_SESSION['CardNumber'] = $_POST['bCNumber'];
				$_SESSION['Expiry'] = $_POST['bExpiry'];
				$_SESSION['CVC'] = $_POST['bCVC'];
				$_SESSION['FullName'] = $_POST['bFName'];
				$_SESSION['Email'] = $_POST['bEmail'];
				$_SESSION['Phone'] = $_POST['bPhone'];
				$_SESSION['Address'] = $_POST['bAddress'];
				$_SESSION['Country'] = $_POST['bCountry'];
				$_SESSION['State'] = $_POST['bState'];
				$_SESSION['City'] = $_POST['bCity'];
				$_SESSION['Zip'] = $_POST['bZip'];
				$_SESSION['Price'] = $_POST['bPrice'];
			}

			//Query to get data from database
			$sql = "SELECT * FROM table_user WHERE email = '$bEmail'";
					
			// execute the Query
			$result = mysqli_query($conn,$sql);
					
			//check the Query is working
			if($result==TRUE){

			// count rows to check the database has data or not
			// Query to get all the rows in the database
			$count = mysqli_num_rows($result);
						
				// check the number of rows
				if($count==1) {
													
					// when data is in the database
					// Use while loop to get all the data from the database . while loop will execute as long as the  we have data in the database
					while($rows=mysqli_fetch_assoc($result)){
						
						//Get individual data
						$fname = $rows['full_name'];
						$email = $rows['email'];
						$mobile = $rows['mobile'];

						if($bEmail==$email && $bFName==$fname && $bPhone==$mobile){
							if($bCountry=='Sri Lanka' || $bCountry=='SriLanka' || $bCountry=='sri lanka' || $bCountry=='srilanka' || $bCountry=='Srilanka' || 
							$bCountry=='Sri lanka' || $bCountry=='sri Lanka' || $bCountry=='sriLanka'){
								$discount = '8%';
								$lastPrice = $bPrice - ($bPrice * 8/100);

							}
							else{
								$discount = '5%';
								$lastPrice = $bPrice - ($bPrice * 5/100);
							}
						}
						else{
							$discount = '0%';
							$lastPrice = $bPrice - ($bPrice * 0/100);
						}
						
					}
				}
				else{
					$discount = '0%';
					$lastPrice = $bPrice - ($bPrice * 0/100);
				}
			}
			else{
				$discount = '0%';
				$lastPrice = $bPrice - ($bPrice * 0/100);
			}
			
			$_SESSION['discount'] = $discount;
			$_SESSION['lPrice'] = $lastPrice;
		}
	?>

	<?php
		
		$RName = $_SESSION['RoomName'];
		$bCheckInDate = $_SESSION['CheckInDate'];
		$bCheckOutDate = $_SESSION['CheckOutDate'];
		$bRQuantity = $_SESSION['Quantity'];
		$bCardNumber = $_SESSION['CardNumber'];
		$bExpiry = $_SESSION['Expiry'];
		$bCVC = $_SESSION['CVC'];
		$bFName = $_SESSION['FullName'];
		$bEmail = $_SESSION['Email'];
		$bPhone = $_SESSION['Phone'];
		$bAddress = $_SESSION['Address'];
		$bCountry = $_SESSION['Country'];
		$bState = $_SESSION['State'];
		$bCity = $_SESSION['City'];
		$bZip = $_SESSION['Zip'];
		$bPrice = $_SESSION['Price'];
		$discount = $_SESSION['discount'];
		$lPrice = $_SESSION['lPrice'];
	?>

	<br><br><br><br><br>
 <center>
  <div class="box">
	<form method="POST" name="form1" action="#">
		<div class="bg-secondary text-white">
			<h5 class="align-items-center p-4">
				<i class="bi bi-person-circle fs-3 me-2 p-4"> KD HOTEL | <b>Booking Details Receipt</b></i>
			</h5>
    	</div>
      	<div class="modal-body align-items-center">
			<div class="mb-3 mt-4">
				<label class="form-label"><b>Room Name : </b>&emsp;<?php echo $RName; ?></label>
			</div>
			<div class="mb-4">
				<label class="form-label"><b>Duration : </b>&emsp;<?php echo $bCheckInDate; ?>&ensp;<b>to</b>&ensp;<?php echo $bCheckOutDate; ?></label>
			</div>
			<div class="mb-4">
				<label class="form-label"><b>Customer Name : </b>&emsp;<?php echo $bFName; ?></label>
			</div>
			<div class="mb-4">
				<label class="form-label"><b>Total Price (Room Price - KDH User Discount) : </b>&emsp;<?php echo $bPrice; ?> - <?php echo $discount; ?></label>
				<label class="form-label">&emsp;=&emsp;<?php echo $lPrice; ?></label>
			</div>
			<div class="d-flex align-items-center justify-content-between mb-3">
				<button name="rRBook" id="rRBook" type="submit" class="btn btn-dark shadow-none col-lg-12">Done</button>
			</div>
  		</div>
    </form>
  </div>
 </center>

  <!-- Room Booking PHP Start -->
	<?php

		$CInDate = date_create($_SESSION['CheckInDate']);
		$bCInDate = date_format($CInDate,"Y-m-d H:i:s"); // date_format() function returns a date formatted according to the specified format

		$COutDate = date_create($_SESSION['CheckOutDate']);
		$bOutDate = date_format($COutDate,"Y-m-d H:i:s"); // date_format() function returns a date formatted according to the specified format

		// Check submit button clicked or not 
		if(isset($_POST['rRBook'])) {

			// SQl Query to insert the data into database
			$sql = "INSERT INTO table_booking SET
					room_name = '$RName',
					price = '$lPrice',
					check_in_date = '$bCInDate',
					check_out_date = '$bOutDate',
					quantity = '$bRQuantity',
					card_number = '$bCardNumber',
					expiry = '$bExpiry',
					cvc = '$bCVC',
					customer_name = '$bFName',
					email = '$bEmail',
					phone = '$bPhone',
					address = '$bAddress',
					country = '$bCountry',
					state = '$bState',
					city = '$bCity',
					zip = '$bZip',
					status = 'Booked'
			";

			// execute the sql query to add data into the database
			$result = mysqli_query($conn,$sql) or die(mysqli_error());

			// Check data is inserted to the database
			if($result==TRUE){
	?>
				<br>
				<script src="./javaScript/sweetalert.min.js"></script>
				<script>
					swal({
						title: "Success!",
						text: "Booking Added Successful!",
						icon: "success"
					}).then(function(){
						window.location.href = "index.php";
						console.log('The Ok Button was clicked.');
					});
				</script>
	<?php
			}
			else{
	?>
			<br>
			<script src="./javaScript/sweetalert.min.js"></script>
			<script>
				swal({
					title: "Sorry!",
					text: "Booking Added Failed!",
					icon: "error"
				}).then(function(){
					window.location.href = "index.php";
					console.log('The Ok Button was clicked.');
				});
			</script>
	<?php
			}
		}
		else{
		}
	?>
  <!-- Room Booking PHP End -->

</body>
</html>