<?php include('../configuration/const.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KD Hotel | Admin Profile Check</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="img/kd.jpg" rel="icon">

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

  <!-- Template Main CSS File -->
   <link href="css/style.css" rel="stylesheet">

  <!-- JavaScript File -->
   <script src="./javaScript/updateAdminProfileValidationExternal.js"></script>

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
                    $password = $rows['password'];
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
          <span class="d-none d-lg-block">KD HOTEL - ADMIN</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

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
          <a class="nav-link collapsed" href="index.php">
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
          <a class="nav-link " href="users_profile_admin.php">
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
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section profile">
        <div class="row">

          <div class="col-xl-12">

            <div class="card">
              <div class="card-body pt-3">

                <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>

                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>

                  </ul>

                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    
                    <h5 class="card-title">PROFILE DETAILS</h5>

                    <div class="card">
                      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
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
                        <h2><?php echo $fname;?></h2>
                        <h3>Admin</h3>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8"><?php echo $fname;?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8"><?php echo $phone;?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?php echo $email;?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Username</div>
                      <div class="col-lg-9 col-md-8"><?php echo $username;?></div>
                    </div>

                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                      <!-- Profile Edit Form -->
                      <form method="POST" onsubmit="return checkAdminProfileValidation()" action="">
                          <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                          <div class="col-md-8 col-lg-9">

                            <?php 
                              if($current_image !=""){
                                  // Display Image
                            ?>
                                  <img src="<?php echo SITE_URL; ?>admin/img/admin_profile_pictures/<?php echo $current_image; ?>" id="currentImg" alt="Profile">
                            <?php
                              }
                              else{
                                  // Show Message
                                  echo "<div class='error'><b>Profile Image is not Available !</b></div>";
                              }
                            ?>

                            <div class="pt-2">
                              <input name="image" id="aimage" class="col-md-4 col-lg-3 form-control" type="file" value= ""  />
                              <span id="imageerror"> </span>
                            </div>
                          </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $fname;?>" />
                                <span id="pnameerror"> </span>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $phone;?>" />
                                <span id="phoneerror"> </span>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="email" type="email" class="form-control" id="email" value="<?php echo $email;?>" />
                                <span id="emailerror"> </span>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="username" type="text" class="form-control" id="username" value="<?php echo $username;?>" />
                                <span id="usernameerror"> </span>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="password" type="text" class="form-control" id="password" value="<?php echo $password;?>" />
                                <span id="passworderror"> </span>
                            </div>
                          </div>

                          <div class="text-center">
                            <input type="hidden" name= "current_image" value="<?php echo $current_image; ?>">
                            <input type="hidden" name="id" value="<?php echo $A_id; ?>">
                            <button type="submit" name="aUserUpdate" id="aUserUpdate" class="col-md-9 col-lg-12 btn btn-primary">Save Changes</button>
                          </div>
                      </form>
                      <!-- End Profile Edit Form -->

          <?php 
      
            // Check the submit button clicked 
            if(isset($_POST['aUserUpdate'])){

              // Get the values from the form to update
              $A_id = $_POST['id'];
              $current_image = $_POST['current_image'];
              $fullName = $_POST['fullName'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $image_name = $_POST['image'];
              $username = $_POST['username'];
              $password = $_POST['password'];

                      //Update the image if selected
                      // Check image is selected
                      // if(isset($_FILES['image']['name'])){

                      //     //Get the image
                      //     $image_name = $_FILES['image']['name'];

                      //     //check image name available or not
                      //     if($image_name !=""){

                      //         // Image Available

                      //         // upload new image
                      //         // Auto Rename the Images
                      //         //Get the image extension (jpg,png) ex:(Iphone.jpg)
                      //         $ext = end(explode('.',$image_name));

                      //         // Rename the Image
                      //         $image_name="admin_".rand(000,999).'.'.$ext; // new name = admin_512.jpg

                      //         $source_path = $_FILES['image']['tmp_name'];

                      //         $destination_path = "./img/admin_profile_pictures/" . $image_name;

                      //         // Final Step to upload the image
                      //         if(move_uploaded_file($source_path, $destination_path)){

                      //         // //check image uploaded or Not
                      //         // //if image is not uploaded - Redirect the page with error message
                      //         // if($upload==false){

                      //             // Error Message
                      //             //$_SESSION['upload'] = "<div class='error'> Image Upload Failed</div>";
                      //             //Redirect to category page
                      //             //header('location:'.SITE_URL.'admin/category.php');
                      //             //die();
                      //             echo "Image Uploaded";
                              
                      //         }
                      //         else{
                        
                      //         }
                      //         // Remove the current image if its available
                      //         if($current_image !=""){

                      //             $remove_path = "./img/admin_profile_pictures/".$current_image;

                      //             $remove = unlink($remove_path);
      
                      //             // Check image is removed from the database
                      //             // If failed to remove the image display a message
                      //             if($remove==false){
                                      
                      //                 // Failed to remove message
                      //                 // $_SESSION['remove_failed']= "<div class='error'>Failed to Remove the Current Image</div>";
                      //                  //Redirect to Category page
                      //                 // header('location:'.SITE_URL.'admin/category.php');
                      //                 // die();
                      //                 echo "Failed to Remove the Current Image";
                      //             }
                      //         }
                            

                      //     }
                      //     else
                      //     {
                      //         $image_name = $current_image;
                      //     }
                      // }
                      // else
                      // {
                      //     $image_name = $current_image;
                      // }

              // SQL Query to Update the Admin Profile
              $sql2 = "UPDATE table_admin SET
                      full_name = '$fullName',
                      phone = '$phone',
                      email = '$email',
                      profile_picture = '$image_name',
                      username = '$username',
                      password = '$password'
                      WHERE a_id = $A_id
              ";

              // Execute the SQL Query
              $result2 = mysqli_query($conn,$sql2);

              // check the SQL Query executed or not
              if($result2==true){

          ?>
                <br>
                <script src="../javaScript/sweetalert.min.js"></script>
                <script>
                  swal({
                    title: "Success!",
                    text: "Profile Update Successful!",
                    icon: "success"
                  }).then(function(){
                    window.location.href = "./users_profile_admin.php";
                    console.log('The Ok Button was clicked.');
                  });
                </script>
          <?php
              //echo "Admin Updated Successfully";
              }
              else{
          ?>
                <br>
                <script src="../javaScript/sweetalert.min.js"></script>
                <script>
                  swal({
                    title: "Sorry!",
                    text: "Profile Update Failed!",
                    icon: "error"
                  }).then(function(){
                    window.location.href = "./users_profile_admin.php";
                    console.log('The Ok Button was clicked.');
                  });
                </script>
          <?php
              }
            }
          ?>

                  </div>
                </div>
                <!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
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