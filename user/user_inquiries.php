<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | User Inquiries</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="img/kd.jpg" rel="icon" class="">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <!-- Google Fonts -->
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="vendor/quill/quill.snow.css" rel="stylesheet">
   <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
   <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Main CSS File -->
   <link href="css/style.css" rel="stylesheet">

  <!-- JavaScript File -->
   <script src="./javaScript/inquiryValidationExternal.js"></script>

  <?php
    session_start();
  ?>

</head>
<body>

    <?php
                  
        $userUEmail = $_SESSION['userUEmail'];

        //Query to get data from database
        $sql = "SELECT * FROM table_user WHERE email = '$userUEmail'";
                
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
                  $U_id = $rows['u_id'];
                  $fullname = $rows['full_name'];
                  $mobile = $rows['mobile'];
                  $email = $rows['email'];
                  $current_image = $rows['profile_picture'];
                  $nic = $rows['nic_pass'];
                }
            }
            else{

            }
        }
        else{
        }
    ?>

  <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="img/user.gif" alt="">
          <span class="d-none d-lg-block">KD HOTEL - USER </span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="user_profile.php" data-bs-toggle="dropdown">
              <?php 
                if($current_image !=""){
                  // Display Image
              ?>
                  <img src="<?php echo SITE_URL; ?>user/img/user_profile_pictures/<?php echo $current_image; ?>" id="currentImg" alt="Profile" class="rounded-circle">
              <?php
                  }
                  else{
                    // Show Message
                    echo "<div class='error'><b>Profile Image is not Available !</b></div>";
                }
              ?>
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fullname;?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo $fullname;?></h6>
                <span>User</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="user_profile.php">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="../index.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="user_bookings.php">
            <i class="bi bi-ui-checks-grid"></i>
            <span>MY BOOKINGS</span>
          </a>
        </li>
        <!-- End My Bookings -->

        <li class="nav-item">
          <a class="nav-link " href="user_inquiries.php">
            <i class="bi bi-patch-question"></i>
            <span>INQUIRIES</span>
          </a>
        </li>
        <!-- End Inquiries -->

        <li class="nav-heading mt-5">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="user_profile.php">
            <i class="bi bi-person-badge"></i>
            <span>Profile Check</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="../index.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- End Logout Nav -->

      </ul>

    </aside>
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>User Inquiries</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">User Inquiries</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-20 mt-3">
            <div class="row">

              <!-- Start Admin List -->
                <div class="card info-card sales-card">

                  <div class="card-body row">

                    <div class="col-lg-6 col-md-6 px-4 mt-4">
                      <div class="bg-white rounded shadow p-4">
                          <center>
                            <img src="img/kd.jpg" class="mb-3" />
                            <h1 class="mb-5 p-2"><b>KD Hotel</b></h1>
                            <h3>Come!</h3>
                            <span>Delight & breathe the air of luxury at the heart of Colombo.</span>
                          </center>
                          <div class="d-flex mt-5">
                            <div class="col-lg-6">
                              <h5><b>Address</b></h5>
                              <a href="https://goo.gl/maps/jFdoRUnTvq314zJy6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                                <i class="bi bi-geo-alt-fill"></i> 69, Janadhipathi<br>&emsp;Mawatha,<br>&emsp;00100 Colombo,<br>&emsp;Sri Lanka.
                              </a>
                            </div>
                            <div>
                              <h5><b>Email</b></h5>
                                <a href="mailto: inquiry@kdhotel.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> inquiry@kdhotel.com</a>
                            </div>
                          </div>

                          <div class="d-flex">
                            <div class="col-lg-6">
                              <h5 class="mt-4"><b>Call us</b></h5>
                                <a href="tel: +94774149095" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 774149095</a>
                                  <br>
                                <a href="tel: +94758297284" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 758297284</a>
                            </div>
                            <div>
                              <h5 class="mt-4"><b>Follow us</b></h5>
                                <a href="https://twitter.com/i/flow/login" class="d-inline-block text-dark fs-5 me-2">
                                  <i class="bi bi-twitter me-1"></i>
                                </a>
                                
                                <a href="https://www.facebook.com/" class="d-inline-block text-dark fs-5 me-2">
                                  <i class="bi bi-facebook me-1"></i>
                                </a>
                                
                                <a href="https://www.instagram.com/accounts/login/" class="d-inline-block text-dark fs-5">
                                  <i class="bi bi-instagram me-1"></i>
                                </a>
                            </div>
                          </div>

                      </div>
                    </div>

                      <div class="col-lg-6 col-md-6 px-4 mt-4">
                        <div class="bg-white rounded shadow p-4">
                          <form method="POST" name="form1" onsubmit="return checkInquiryValidation()" action="#">
                            <h5 class="mb-5"><b>Send a message</b></h5>
                            <div class="mb-3">
                              <label class="form-label" style="font-weight: 500;">Full Name</label>
                              <input name="iFName" id="fullname" type="text" class="form-control shadow-none" value="<?php echo $fullname; ?>" readonly />
                              <span id="nameerror"> </span>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" style="font-weight: 500;">Email</label>
                              <input name="iEmail" id="email" type="text" class="form-control shadow-none" value="<?php echo $email; ?>" readonly />
                              <span id="emailerror"> </span>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" style="font-weight: 500;">Subject</label>
                              <input name="iSubject" id="subject" type="text" class="form-control shadow-none" value="<?php echo "KDH User Inquiry - UserId: ".$U_id; ?>" readonly />
                              <span id="subjecterror"> </span>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" style="font-weight: 500;">Inquiry</label>
                              <textarea name="iInquiry" id="inquiry" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                              <span id="inquiryerror"> </span>
                            </div>
                              <br><button name="isend" type="submit" class="btn btn-dark shadow-none text-white mt-2 col-lg-12">Send</button>
                          </form>
                        </div>
                      </div>

                      <?php
                        // Check send button clicked or not 
                        if(isset($_POST['isend'])) {

                        // Get data from the form
                        $iFName = $_POST['iFName'];
                        $iEmail = $_POST['iEmail'];
                        $iSubject = $_POST['iSubject'];
                        $iInquiry = $_POST['iInquiry'];

                        // SQl Query to insert the data into database
                        $sql = "INSERT INTO 	table_inquiries SET
                                full_name = '$iFName',
                                email = '$iEmail',
                                subject = '$iSubject',
                                inquiry = '$iInquiry'
                        ";

                        // execute the sql query to add data into the database
                        $result = mysqli_query($conn, $sql) or die(mysqli_error());

                            // Check data is inserted to the database
                            if($result==TRUE){
                      ?>
                                        <br>
                                        <script src="../javaScript/sweetalert.min.js"></script>
                                        <script>
                                            swal({
                                                title: "Success!",
                                                text: "Inquiry Sent Successful!",
                                                icon: "success"
                                            }).then(function(){
                                                window.location.href = "user_inquiries.php";
                                                console.log('The Ok Button was clicked.');
                                            });
                                        </script>
                      <?php
                            }
                            else{
                      ?>
                                    <br>
                                    <script src="../javaScript/sweetalert.min.js"></script>
                                    <script>
                                        swal({
                                            title: "Sorry!",
                                            text: "Inquiry Sent Failed!",
                                            icon: "error"
                                        }).then(function(){
                                            window.location.href = "user_inquiries.php";
                                            console.log('The Ok Button was clicked.');
                                        });
                                    </script>
                      <?php
                            }
                        }
                        else{

                        }
                      ?>

                  </div>

                </div>
              <!-- End Admin List -->

            </div>
          </div>
          <!-- End Left side columns -->

        </div>
      </section>

    </main>
  <!-- End Main -->

  <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        <strong>&copy; <span>2023 KD Hotel. All Rights Reserved. | Design and Developed by VKD COORAY</span></strong>
      </div>
    </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
    <script src="vendor/apexcharts/apexcharts.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/chart.min.js"></script>
    <script src="vendor/echarts/echarts.min.js"></script>
    <script src="vendor/quill/quill.min.js"></script>
    <script src="vendor/simple-datatables/simple-datatables.js"></script>
    <script src="vendor/tinymce/tinymce.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
    <script src="inc/main.js"></script>

</body>
</html>