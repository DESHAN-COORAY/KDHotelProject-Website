<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | My Bookings</title>
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
   <script src="./javaScript/updateBookingDetailsValidationExternal.js"></script>

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
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link " href="user_bookings.php">
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
          <a class="nav-link collapsed" href="../index.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- End Logout Page Nav -->

      </ul>

    </aside>
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>My Bookings</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">My Bookings</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-20">
            <div class="row">

              <!-- Start Bookings List -->
                <div class="card info-card sales-card mt-3">
                    <div class="card-body">
                      <h5 class="card-title">Bookings List</h5>
                        <div>
                            <center>
                              <table class="table table-bordered table-hover mb-4">
                                  <thead>
                                      <tr class="table-primary">
                                      <th scope="col" class="col-1">#</th>
                                      <th scope="col" class="col-4">CUSTOMER NAME</th>
                                      <th scope="col" class="col-3">EMAIL</th>
                                      <th scope="col" class="col-2">PHONE</th>
                                      <th scope="col" class="col-5">ROOM NAME</th>
                                      <th scope="col" class="col-3">PRICE</th>
                                      <th scope="col" class="col-3">STATUS</th>
                                      <th scope="col" class="col-3">ACTIONS</th>
                                      </tr>
                                  </thead>
                  
                                  <?php
                                    //Query to get data from database
                                    $sql = "SELECT * FROM table_booking WHERE email = '$userUEmail'";
                    
                                    // execute the Query
                                    $result = mysqli_query($conn,$sql);
                    
                                    //check the Query is working
                                    if($result==TRUE){

                                          // count rows to check the database has data or not
                                          // Query to get all the rows in the database
                                          $count = mysqli_num_rows($result);
                  
                                          $M_I = 1;

                                          // check the number of rows
                                          if($count>0) {

                                              // when data is in the database
                                              // Use while loop to get all the data from the database. while loop will execute as long as the  we have data in the database
                                              while($rows=mysqli_fetch_assoc($result)){
                  
                                                //Get individual data
                                                $B_id=$rows['b_id'];
                                                $customer_name=$rows['customer_name'];
                                                $email=$rows['email'];
                                                $phone=$rows['phone'];
                                                $room_name=$rows['room_name'];
                                                $price=$rows['price'];
                                                $status=$rows['status'];
                  
                                                //Display the values in the table
                                  ?>
                                                <tbody>
                                                  <tr>
                                                    <td><?php echo $B_id;?></td>
                                                    <td><?php echo $customer_name;?></td>
                                                    <td><?php echo $email;?></td>
                                                    <td><?php echo $phone;?></td>
                                                    <td><?php echo $room_name;?></td>
                                                    <td><?php echo "$ ".$price;?></td>
                                                    <td><?php echo $status;?></td>
                                                    <td>
                                                      <center>
                                                        <button type='button' class='btn btn-danger deleteBtn p-2'
                                  <?php
                                                            if($status=='Booked'){ 
                                  ?> 
                                                              disabled 
                                  <?php 
                                                            }
                                                            elseif($status=='Reserved'){ 
                                  ?> 
                                                              disabled 
                                  <?php
                                                            }
                                  ?> 
                                                        onclick="window.location.href='<?php echo SITE_URL; ?>user/delete_booking.php?b_id=<?php echo $B_id; ?>'"><i class="fas fa-trash"></i></button>
                                                      </center>
                                                      </td>
                                                  </tr>
                                  <?php
                                              }
                                          }
                                          else{
                                              // when data is not in the database
                                  ?>
                                            <br>
                                            <script src="../javaScript/sweetalert.min.js"></script>
                                            <script>
                                              swal({
                                                title: "Sorry!",
                                                text: "Database is empty!",
                                                icon: "error"
                                              }).then(function(){
                                                window.location.href = "./user_bookings.php";
                                                console.log('The Ok Button was clicked.');
                                                window.location.href = "./index.php";
                                              });
                                            </script>
                                  <?php
                                          }
                                      }
                                  ?>
                  
                                  </tbody>
                              </table>
                            </center>
                        </div>
                    </div>
                </div>
              <!-- End Bookings List -->

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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>