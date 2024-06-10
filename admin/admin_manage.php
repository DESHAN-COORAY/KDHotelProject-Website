<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | Admin Manage</title>
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
   <script src="./javaScript/addAdminValidationExternal.js"></script>

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
          <a class="nav-link " href="admin_manage.php">
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
        <h1>Admin Manage</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Admin Manage</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-20">
            <div class="row">

                <div class="pagetitle">
                  <button type="button" class="btn btn-dark shadow-none me-lg-3 me-2 text-white mt-4" data-bs-toggle="modal" data-bs-target="#addAdminModel">Add Admin	</button>
                  <br><br>
                </div>

              <!-- Start Admin List -->
                <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">Admin List</h5>
                        <div>
                            <center>
                              <table class="table table-bordered table-hover mb-4">
                                  <thead>
                                      <tr class="table-primary">
                                      <th scope="col" class="col-3">ADMIN ID</th>
                                      <th scope="col" class="col-4">FULL NAME</th>
                                      <th scope="col" class="col-4">EMAIL</th>
                                      <th scope="col" class="col-4">USERNAME</th>
                                      <th scope="col" class="col-1">ACTIONS</th>
                                      </tr>
                                  </thead>
                  
                                  <?php 
                                    //Query to get data from database
                                    $sql = "SELECT * FROM table_admin";
                    
                                    // execute the Query
                                    $result = mysqli_query($conn,$sql);
                    
                                    //check the Query is working
                                    if($result==TRUE){

                                        // count rows to check the database has data or not
                                        // Query to get all the rows in the database
                                        $count = mysqli_num_rows($result);
                    
                                        $A_I = 1;

                                          // check the number of rows
                                          if($count>0) {
                                          
                                            // when data is in the database
                                            // Use while loop to get all the data from the database. while loop will execute as long as the  we have data in the database
                                            while($rows=mysqli_fetch_assoc($result)){
                    
                                                //Get individual data
                                                $A_id=$rows['a_id'];
                                                $full_name=$rows['full_name'];
                                                $email=$rows['email'];
                                                $username=$rows['username'];
                    
                                                //Display the values in the table
                                  ?>
                                                <tbody>
                                                  <tr>
                                                    <td><?php echo $A_I++;?></td>
                                                    <td><?php echo $full_name;?></td>
                                                    <td><?php echo $email;?></td>
                                                    <td><?php echo $username;?></td>
                                                    <td>
                                                      &emsp;
                                                      <a href="<?php echo SITE_URL; ?>admin/delete_admin.php?a_id=<?php echo $A_id; ?>" class="p-2 btn btn-danger"><i class="fas fa-user-times"></i></a>
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
                                                    window.location.href = "./admin_manage.php";
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
              <!-- End Admin List -->

            </div>
          </div>
          <!-- End Left side columns -->

        </div>
      </section>

      <div class="modal fade" id="addAdminModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form method="POST" name="form1" onsubmit="return checkValidation()" action="#">
                  <div class="modal-header bg-dark text-white">
                  <h5 class="modal-title d-flex align-items-center">
                  <img src="img/kd.jpg" class="col-xxl-3 p-2 bg-white" /> 
                  <i class="bi fs-3 me-2">&ensp;KD HOTEL <br>&ensp;<b>Add Admin</b> </i>
                  </h5>
                  <button type="reset" class="btn-close shadow-none bg-light" data-bs-dismiss="modal" aria-label="Close"></button>&emsp;
                  </div>
                  <div class="modal-body">
                      <div class="text-primary">
                          <h3><b>Welcome</b></h3>
                      </div>
                      <div class="mb-4 text-primary">Let's create your account!</div>
                      <div class="mb-3">
                          <label class="form-label">Full Name</label>
                          <input name="aFName" id="fullname" type="text" class="form-control shadow-none">
                          <span id="nameerror"> </span>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input name="aEmail" id="email" type="text" class="form-control shadow-none">
                          <span id="emailerror"> </span>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Username</label>
                          <input name="aUName" id="username" type="text" class="form-control shadow-none">
                          <span id="usernameerror"> </span>
                      </div>
                      <div class="mb-4">
                          <label class="form-label">Password</label>
                          <input name="aPass" id="password" type="password" class="form-control shadow-none">
                          <span id="passworderror"> </span>
                      </div>
                      <div class="modal-footer">
                          <button name="add" type="submit" class="btn btn-primary shadow-none text-white col-lg-12">Add</button>
                      </div>

                  </div>
              </form>
          </div>
      </div>
      </div>

      <?php

          // Check submit button clicked or not 
          if(isset($_POST['add'])) {

            // Get data from the form
            $aFName = $_POST['aFName'];
            $aEmail = $_POST['aEmail']; // $aPImg = $_POST['./img/profile-img.jpg']; --- profile_picture = '$aPImg', Auto upload image
            $aUName = $_POST['aUName'];
            $aPass = $_POST['aPass']; // Password encrypted with md5

            // SQl Query to insert the data into database
            $sql = "INSERT INTO table_admin SET
                    full_name = '$aFName',
                    email = '$aEmail',
                    username = '$aUName',
                    password = '$aPass'
            ";

            // execute the sql query to add data into the database
            $result = mysqli_query($conn,$sql) or die(mysqli_error());

              // Check data is inserted to the database
              if($result==TRUE){
      ?>
                <br>
                <script src="../javaScript/sweetalert.min.js"></script>
                <script>
                  swal({
                    title: "Success!",
                    text: "Admin Added Successful!",
                    icon: "success"
                  }).then(function(){
                    window.location.href = "./admin_manage.php";
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
                    text: "Admin Added Failed!",
                    icon: "error"
                  }).then(function(){
                    window.location.href = "./admin_manage.php";
                    console.log('The Ok Button was clicked.');
                  });
                </script>
      <?php
              }
          }
          else{

          }
      ?>

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