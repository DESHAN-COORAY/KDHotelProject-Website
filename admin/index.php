<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | Admin Dashboard</title>
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
                  
        $adminUName = $_SESSION['adminUName'];

        //Query to get data from database
        $sql = "SELECT * FROM table_admin WHERE username = '$adminUName'";
                
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
                    $A_id = $rows['a_id'];
                    $fname = $rows['full_name'];
                    $phone = $rows['phone'];
                    $email = $rows['email'];
                    $current_image = $rows['profile_picture'];
                    $username = $rows['username'];
                    
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
          <img src="img/admin.gif" alt="">
          <span class="d-none d-lg-block">KD HOTEL - ADMIN </span>
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

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="users_profile_admin.php" data-bs-toggle="dropdown">
              <?php 
                if($current_image !=""){
                // Display Image
              ?>
                  <img src="<?php echo SITE_URL; ?>admin/img/admin_profile_pictures/<?php echo $current_image; ?>" id="currentImg" alt="Profile" class="rounded-circle">
              <?php
                }
                else{
                  // Show Message
                  echo "<div class='error'><b>Profile Image is not Available !</b></div>";
                }
              ?>
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fname;?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo $fname;?></h6>
                <span>Admin</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users_profile_admin.php">
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
          <a class="nav-link collapsed" href="admin_manage.php">
            <i class="bi bi-people"></i>
            <span>ADMIN MANAGE</span>
          </a>
        </li>
        <!-- End Admin Manage -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="rooms_manage.php">
            <i class="bi bi-building"></i>
            <span>ROOMS MANAGE</span>
          </a>
        </li>
        <!-- End Rooms Manage -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="bookings_manage.php">
            <i class="bi bi-ui-checks-grid"></i>
            <span>BOOKINGS MANAGE</span>
          </a>
        </li>
        <!-- End Bookings Manage -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="kdhuser_inquiries.php">
            <i class="bi bi-patch-question"></i>
            <span>KDH USER INQUIRIES</span>
          </a>
        </li>
        <!-- End KDH User Inquiries -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="user_messages.php">
            <i class="bi bi-chat"></i>
            <span>USER MESSAGES</span>
          </a>
        </li>
        <!-- End User Messages -->

        <li class="nav-heading mt-5">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="users_profile_admin.php">
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
        <h1>Admin Dashboard</h1>
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

              <!-- Start Title-->
                <div class="pagetitle mt-4 mb-4">
                  <h1>Total Figures</h1>
                </div>
              <!-- End Title -->

              <!-- Total Admin -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">Total <span>| Admin Count</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                    
                                <h6>
                                <?php
                                    // Query to get data from database
                                    $sql = "SELECT * FROM table_admin";

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
              <!-- End Total Admin-->

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

              <!-- Get some Space -->
                <div class="pagetitle mt-4">
                </div>
              <!-- End Get some Space -->

              <!-- Total Bookings (2023) -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">Total <span>| Bookings (2023)</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-ui-checks-grid"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                              <?php
                                      // Query to get data from database
                                      $sql = "SELECT * FROM table_booking";

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

              <!-- Total Income (2023) -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">

                    <div class="card-body">
                      <h5 class="card-title">Total <span>| Income (2023)</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-cash"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                              <?php
                                      // Query to get data from database
                                      $sql = "SELECT SUM(price) AS Total FROM table_booking";

                                      // execute query
                                      $result = mysqli_query($conn,$sql);

                                      // count rows
                                      $row = mysqli_fetch_assoc($result);

                                      // Get total income
                                      $total_income= $row['Total'];
                                ?>
                                <?php echo"$". $total_income; ?>
                          </h6>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              <!-- End Total Income (2023) -->

              <!-- Total User Inquiries -->
                <div class="col-xxl-4 col-xl-12">
                    <div class="card info-card customers-card">

                      <div class="card-body">
                        <h5 class="card-title">Total <span>| KDH User Inquiries</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-patch-question"></i>
                          </div>
                            <div class="ps-3">
                            
                                <h6>
                                    <?php
                                            // Query to get data from database
                                            $sql = "SELECT * FROM table_inquiries";

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
              <!-- End Total User Inquiries -->

            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
            <div class="col-lg-4">

              <!-- Sumamry Of Total Reservations (2022) -->
                <div class="card">

                  <div class="card-body pb-0">
                    <center>
                      <h5 class="card-title">Summary of Total Reservations<br>2022</h5>
                    </center>

                    <div id="trafficChart" style="min-height: 380px;" class="echart">
                    </div>

                      <script>
                        document.addEventListener("DOMContentLoaded", () => {
                          echarts.init(document.querySelector("#trafficChart")).setOption({
                            tooltip: {
                              trigger: 'item'
                            },
                            legend: {
                              top: '5%',
                              left: 'center'
                            },
                            series: [{
                              name: 'Access From',
                              type: 'pie',
                              radius: ['40%', '70%'],
                              avoidLabelOverlap: false,
                              label: {
                                show: false,
                                position: 'center'
                              },
                              emphasis: {
                                label: {
                                  show: true,
                                  fontSize: '18',
                                  fontWeight: 'bold'
                                }
                              },
                              labelLine: {
                                show: false
                              },
                              data: [{
                                  value: 200,
                                  name: '1st Quarter '
                                },
                                {
                                  value: 80,
                                  name: '2nd Quarter '
                                },
                                {
                                  value: 130,
                                  name: '3rd Quarter '
                                },
                                {
                                  value: 350,
                                  name: '4th Quarter '
                                }
                              ]
                            }]
                          });
                        });
                      </script>

                  </div>
                </div>
              <!-- End Sumamry Of Total Reservations -->
            
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