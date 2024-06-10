<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | User Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="img/kd.jpg" rel="icon" class="">

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
                <span>Admin</span>
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
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>
      </nav><!-- End Icons Navigation -->

    </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php">
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
          <a class="nav-link collapsed" href="user_inquiries.php">
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
          <a class="nav-link collapsed" href="../index.php"> <!-- logout.php -->
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- End Login Page Nav -->
      </ul>

    </aside>
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>User Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Information (Discounts & Offers) -->
                <div class="col-xxl-12 col-md-6 mt-4">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">Information Re: <span> Discounts & Offers</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-info"></i>
                            </div>
                            <div class="ps-3">  
                                <p>
                                    <b># KD Hotel Honors Member Reward Program </b>:
                                    &emsp;
                                    Local Member - <b>8% discount</b>
                                    <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                    Foreign Member - <b>5% discount</b>
                                </p>
                            </div>
                        </div>
                      
                    </div>

                  </div>
                </div>
              <!-- End Information (Discounts & Offers) -->

              <!-- Get some Space -->
                <div class="pagetitle mt-4 mb-4">
                  <h1>Total Figures</h1>
                </div>
              <!-- End Get some Space -->

              <!-- Total Bookings (2023) -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">Total <span>| My Bookings</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-ui-checks-grid"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                              <?php
                                      // Query to get data from database
                                      $sql = "SELECT * FROM table_booking WHERE email = '$userUEmail'";

                                      // execute query
                                      $result = mysqli_query($conn,$sql);

                                      // count rows
                                      $count = mysqli_num_rows($result);
                                ?>
                                <?php echo $count; ?>
                          </h6>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              <!-- End Total Bookings (2023) -->
              
              <!-- Room Categories -->
              <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">


                    <div class="card-body">
                      <h5 class="card-title">Total <span>| Room Categories</span></h5>

                      <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-building"></i>
                          </div>
                          <div class="ps-3">

                              <h6>
                                  <?php
                                      // Query to get data from database
                                      $sql = "SELECT * FROM table_rooms";

                                      // execute query
                                      $result = mysqli_query($conn,$sql);

                                      // count rows
                                      $count = mysqli_num_rows($result);
                                  ?>
                                  <?php echo $count; ?>
                              </h6>

                          </div>
                      </div>
                    </div>

                  </div>
                </div>
              <!-- End Room Categories -->

              <!-- Total user count -->
                <div class="col-xxl-4 col-xl-12">
                  <div class="card info-card customers-card">

                    <div class="card-body">
                      <h5 class="card-title">Total <span>| User Count (2023)</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-person"></i>
                        </div>
                          <div class="ps-3">
                          
                              <h6>
                                  <?php
                                          // Query to get data from database
                                          $sql = "SELECT * FROM table_user";

                                          // execute query
                                          $result = mysqli_query($conn,$sql);

                                          // count rows
                                          $count = mysqli_num_rows($result);
                                  ?>
                                  <?php echo $count; ?>
                              </h6>

                          </div>
                      </div>

                    </div>

                  </div>
                </div>
              <!-- End Total user count -->

            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
            <div class="col-lg-4">

              <!-- Rating Comparison -->
                <div class="card">

                  <div class="card-body pb-0">
                    <center>
                      <h5 class="card-title" id="radialBarChart">User Rating Comparison<br><span>All Time</span><br><br><br></h5>
                    </center>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#radialBarChart"), {
                            series: [90, 95.48, 82.22, 65.22],
                            chart: {
                            height: 350,
                            type: 'radialBar',
                            toolbar: {
                                show: true
                            }
                            },
                            plotOptions: {
                            radialBar: {
                                dataLabels: {
                                name: {
                                    fontSize: '22px',
                                },
                                value: {
                                    fontSize: '16px',
                                },
                                total: {
                                    show: true,
                                    label: 'Total',
                                    formatter: function(w) {
                                    // By default this function returns the average of all series.
                                    // The below is just an example to show the use of custom formatter function
                                    return 100
                                    }
                                }
                                }
                            }
                            },
                            labels: ['4', '3', '2', '1'],
                        }).render();
                        });
                    </script>

                  </div>
                </div>
              <!-- End Rating Comparison -->
            
            </div>
          <!-- End Right side columns -->

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