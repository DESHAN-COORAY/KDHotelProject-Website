<?php
    session_start();                            
?>
<?php include('configuration/const.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- JavaScript File -->
	<script src="./javaScript/userLoginValidationExternal.js"></script>
	<script src="./javaScript/adminLoginValidationExternal.js"></script>
	<script src="./javaScript/UserRegistrationValidationExternal.js"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg bg-secondary px-lg-3 py-lg-2 shadow-sm sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand me-5 fw-bold fs-3 h-font text-white" href="index.php">KD HOTEL</a>
		<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2 text-white" href="rooms.php">Rooms</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2 text-white" href="facilities.php">Facilities</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2 text-white" href="contact.php">Contact Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link me-2 text-white" href="about.php">About</a>
			</li>
		</ul>
		<div class="d-flex" role="search">
			<button type="button" class="btn btn-dark shadow-none me-lg-3 me-2 text-white" data-bs-toggle="modal" data-bs-target="#userloginModel">User Login	</button>
			<button type="button" class="btn btn-dark shadow-none text-white" data-bs-toggle="modal" data-bs-target="#adminloginModel">Admin Login	</button>
		</div>
		</div>
	</div>
	</nav>

	<div class="modal fade" id="userloginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" name="form1" onsubmit="return checkUserValidation()" action="#">
				<div class="modal-header bg-secondary text-white">
					<h5 class="modal-title d-flex align-items-center">
					<i class="bi bi-person-circle fs-3 me-2"> KD HOTEL | <b>User Login</b></i>
					</h5>
					<button type="reset" class="btn-close shadow-none bg-light" data-bs-dismiss="modal" aria-label="Close"></button>&emsp;
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Email address</label>
						<input name="uemail" id="uEmail" type="text" class="form-control shadow-none">
						<span id="uemailerror"> </span>
					</div>
					<div class="mb-4">
						<label class="form-label">Password</label>
						<input name="upassword" id="uPassword" type="password" class="form-control shadow-none">
						<span id="upassworderror"> </span>
					</div>
					<div class="d-flex align-items-center justify-content-between mb-3">
						<button name="ulogin" type="submit" class="btn btn-dark shadow-none col-lg-8">LOGIN</button>
						<a href="" class="text-secondary text-decoration-none" >Forgot Password</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary shadow-none text-white col-lg-12" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>

	<?php
		// Check the submit is clicked
		if(isset($_REQUEST['ulogin'])){
			$_SESSION['userUEmail'] = $_POST['uemail'];
		}
	?>

  <!-- User login PHP Start -->
	<?php 
		
		// Check the submit is clicked
		if(isset($_POST['ulogin'])){
	
			// Get the data from User Login Form
			$uemail = $_POST['uemail'];
			$upassword = $_POST['upassword'];
	
			// SQl query to check username and password exist in the database
			$sql = "SELECT * FROM table_user WHERE email = '$uemail' AND password = '$upassword'";
	
			// Execute the Query to add data into the database
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
			// Count the rows to check users exists
			$count = mysqli_num_rows($result);
	
			if($count==1){
				
	?>
				<br>
				<script src="./javaScript/sweetalert.min.js"></script>
				<script>
					swal({
						title: "Success!",
						text: "User Login Successful!",
						icon: "success"
					}).then(function(){
						window.location.href = "./user/index.php";
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
						text: "User Login Failed!",
						icon: "error"
					}).then(function(){
						window.location.href = "";
						console.log('The Ok Button was clicked.');
					});
				</script>
	<?php
			}
		}
		else{
		}
	?>
  <!-- User login PHP End -->

	<div class="modal fade" id="adminloginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" name="form1" onsubmit="return checkAdminValidation()" action="#">
					<div class="modal-header bg-dark text-white">
						<h5 class="modal-title d-flex align-items-center">
							<i class="bi bi-person-circle fs-3 me-2"> KD HOTEL | <b>Admin Login</b></i>
						</h5>
						<button type="reset" class="btn-close shadow-none bg-light" data-bs-dismiss="modal" aria-label="Close"></button>&emsp;
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input name="ausername" id="aUsername" type="text" class="form-control shadow-none">
							<span id="ausernameerror"> </span>
						</div>
						<div class="mb-4">
							<label class="form-label">Password</label>
							<input name="apassword" id="aPassword" type="password" class="form-control shadow-none">
							<span id="apassworderror"> </span>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-3">
							<button name="alogin" type="submit" class="btn btn-dark shadow-none col-lg-8">LOGIN</button>
							<a href="" class="text-secondary text-decoration-none" >Forgot Password</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
		// Check the submit is clicked
		if(isset($_REQUEST['alogin'])){
			$_SESSION['adminUName'] = $_POST['ausername'];
		}
	?>

  <!-- Admin login PHP Start -->
	<?php 
		
		// Check the submit is clicked
		if(isset($_POST['alogin'])){
	
			// Get the data from Admin Login Form
			$ausername = $_POST['ausername'];
			$apassword = $_POST['apassword'];
	
			// SQl query to check username and password exist in the database
			$sql = "SELECT * FROM table_admin WHERE username = '$ausername' AND password = '$apassword'";
	
			// Execute the Query to add data into the database
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
			// Count the rows to check users exists
			$count = mysqli_num_rows($result);
	
			if($count==1){
				
	?>
				<br>
				<script src="./javaScript/sweetalert.min.js"></script>
				<script>
					swal({
						title: "Success!",
						text: "Admin Login Successful!",
						icon: "success"
					}).then(function(){
						window.location.href = "./admin/index.php";
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
						text: "Admin Login Failed!",
						icon: "error"
					}).then(function(){
						window.location.href = "";
						console.log('The Ok Button was clicked.');
					});
				</script>
	<?php
			}
		}
		else{
		}
	?>
  <!-- Admin login PHP End -->

	<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
								
				<form method="POST" name="form1" onsubmit="return checkUserRegValidation()" action="#">
					<div class="modal-header bg-secondary text-white">
						<h5 class="modal-title d-flex align-items-center">
							<i class="bi bi-person-lines-fill fs-3 me-2"> KD HOTEL | <b>User Registration</b></i>
						</h5>
						<button type="reset" class="btn-close shadow-none bg-light" data-bs-dismiss="modal" aria-label="Close"></button>&emsp;
					</div>
					<div class="modal-body">
						<center><span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
							Note: Your details must match with your ID (NIC) that will be required during check-in.
						</span></center>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Full Name</label>
									<input name="uFName" id="uFName" type="text" class="form-control shadow-none">
									<span id="uRegNameError"> </span>
								</div>
								<div class="col-md-6 p-0 mb-3">
									<label class="form-label">Email</label>
									<input name="uRegEmail" id="uRegEmail" type="text" class="form-control shadow-none">
									<span id="uRegEmailError"> </span>
								</div>
								<div class="col-md-12 p-0 mb-3">
									<label class="form-label">Address</label>
									<input name="uAddress" id="uAddress" type="text" class="form-control shadow-none">
									<span id="uRegAddressError"> </span>
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">NIC Number</label>
									<input name="uNPD" id="uNPD" type="text" class="form-control shadow-none">
									<span id="uRegNPDError"> </span>
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Date of Birth</label>
									<input name="uDOB" id="uDOB" type="text" class="form-control shadow-none">
									<span id="uRegDoBError"> </span>
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Password</label>
									<input name="uPass" id="uPass" type="text" class="form-control shadow-none" onchange="checkBothPassword()">
									<span id="uRegPasswordError"> </span>
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Confirm Password</label>
									<input name="uCPass" id="uCPass" type="password" class="form-control shadow-none" onchange="checkBothPassword()">
									<span id="uRegConPasswordError"> </span>
								</div>
								<div class="col-md-6 ps-0 mb-3">
									<label class="form-label">Phone Number</label>
									<input name="uPhone" id="uTelephone" type="text" class="form-control shadow-none">
									<span id="uRegPhoneError"> </span>
								</div>
								<div class="col-md-6 p-0">
									<label class="form-label">Picture</label>
									<input name="uPicture" id="uPicture" type="file" class="form-control shadow-none">
									<span id="uRegPictureError"> </span>
								</div>
								<div class="text-center my-1">
									<button name="uReg" id="uReg" type="submit" class="btn btn-dark shadow-none col-lg-8">Register</button>
									<button type="reset" class="btn text-white shadow-none custom-bg m-3 col-lg-3">Clear</button>
								</div>
							</div>
						</div>	
					</div>
				</form>
								
			</div>
		</div>
	</div>

  <!-- User Register PHP Start -->
	<?php

		// Check submit button clicked or not 
		if(isset($_POST['uReg'])) {

			// Get data from the form
			$uFName = $_POST['uFName'];
			$uEmail = $_POST['uRegEmail'];
			$uPhone = $_POST['uPhone'];
			$uPicture = $_POST['uPicture'];
			$uAddress = $_POST['uAddress'];
			$uNPD = $_POST['uNPD'];
			$uDOB = $_POST['uDOB'];
			$uPass = $_POST['uPass']; // Password encrypted with md5
			$uCPass = $_POST['uCPass']; // Password encrypted with md5

			// SQl Query to insert the data into database
			$sql = "INSERT INTO table_user SET
					full_name = '$uFName',
					email = '$uEmail',
					mobile = '$uPhone',
					profile_picture = '$uPicture',
					address = '$uAddress',
					nic_pass = '$uNPD',
					dob = '$uDOB',
					password = '$uPass',
					confirm_password = '$uCPass'
			";

			// execute the sql query to add data into the database
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // or die(mysqli_error())

				// Check data is inserted to the database
				if($result==TRUE){
	?>
					<br>
					<script src="./javaScript/sweetalert.min.js"></script>
					<script>
						swal({
							title: "Success!",
							text: "User Registration Successful!",
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
							text: "User Registration Failed!",
							icon: "error"
						}).then(function(){
							window.location.href = "";
							console.log('The Ok Button was clicked.');
						});
					</script>
	<?php
				}
		}
		else{

		}
	?>
  <!-- User Register PHP End -->

</body>
</html>