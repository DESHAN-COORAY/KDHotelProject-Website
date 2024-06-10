<!DOCTYPE html>
<html>
<head>
	<title>KD HOTEL | Rooms</title>

    <?php require('inc/links.php'); ?>

  <!-- Favicons -->
    <link href="images/kd.jpg" rel="icon" class="">

  <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css">

  <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</head>
<body>

 <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="col-lg-12 col-md-12 px-4">
      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Deluxe Room City Facing</h4>
            <img src="images/rooms/Deluxe_Room_City Facing.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>The large rooms are a luxurious retreat in the middle of the city, with captivating views of Colombo’s vibrant streets.</h6>
            <br>
            <div class="features mb-4"> >
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '1/DRC'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
              <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
            </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Deluxe Room Ocean Facing</h4>
            <img src="images/rooms/Deluxe_Room_Ocean_Facing.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>The large rooms are a luxurious retreat in the middle of the city, with captivating views of Colombo’s vibrant streets.</h6>
            <br>
            <div class="features mb-4"> >
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Luxury Room City View</h4>
            <img src="images/rooms/Luxury_Room_City_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>Unwind in a sanctuary of splendour in these well-furnished rooms.</h6>
            <br><br>
            <div class="features mb-4"> >
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Children
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '3/LRC'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Luxury Room Ocean View</h4>
            <img src="images/rooms/Luxury_Room_Ocean_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>Unwind in a sanctuary of splendour in these well-furnished rooms.</h6>
            <br><br>
            <div class="features mb-4"> >
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Children
                  </span>

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
                        $row=mysqli_fetch_assoc($result);

                        $id = $row['r_id'];
                        $price = $row['price'];
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">KD Club Room City View</h4>
            <img src="images/rooms/KD_Club_Room_City_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>With a host of services and amenities, KD Club is home away from home. Choose a sparkling city view.</h6>
            <br>
            <div class="features mb-4"> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    48 Sq Mt
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '5/KCRC'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">KD Club Room Ocean View</h4>
            <img src="images/rooms/KD_Club_Room_Ocean_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>With a host of services and amenities, KD Club is home away from home. Choose a sparkling city view.</h6>
            <br>
            <div class="features mb-4"> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    48 Sq Mt
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '6/KCRO'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Deluxe One Bed Room Suite City View</h4>
            <img src="images/rooms/Deluxe_One_Bed_Room_Suite_City_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>With contemporary décor and exquisite ethnic aspects, the brand new Deluxe Suites redefine elegance. 
            Enjoy a Continental breakfast served by your own butler, while gazing at the stunning ocean beyond the Galle Face Green.</h6>
            <br>
            <div class="features mb-4"> >
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
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Grand Luxury Suite</h4>
            <img src="images/rooms/Grand_Luxury_Suite.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>The enchanting Grand Luxury Suite displays immaculate luxury and distinction with spellbinding ocean views. 
              These masterpieces can be combined with an adjacent connecting room to form a two-bedroom suite.</h6>
            <br>
            <div class="features mb-4"> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    98 Sq Mt
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '8/GLS'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Executive 1 Bed Room Suite Ocean View</h4>
            <img src="images/rooms/Executive_1_Bed_Room_Suite_Ocean_View.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>The extravagant Executive Suites boast contemporary interiors with mesmerising ocean views. 
              Each has a relaxing living room, elegant bedroom and extravagant bathroom, and offers you nothing but the best experience.</h6>
            <br>
            <div class="features mb-4"> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    60 Sq Mt
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Adults
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '9/EOBO'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>

      <div class="bg-white mb-4 rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <h4 class="mb-3">Tata Suite</h4>
            <img src="images/rooms/Tata_Suite.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-7 px-lg-3 px-md-3 px-0 mt-5">
            <h6>The only suite of its kind in all Sri Lanka, The Tata Suite is a sight to behold, especially when sunset reflects off its marble floors, 
              bathing it in an ethereal golden glow. The grand piano is a striking accent piece in the living room.</h6>
            <br>
            <div class="features mb-4"> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    316 Sq Mt
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                  <br> >
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
                  <br> >
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>

                  <?php 
          
                    // Create SQL Query to get the Details
                    $sql= "SELECT * FROM table_rooms WHERE r_id = '10/TS'";

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
                        $availability = $row['availability'];

                        if($availability=='yes'){
                          $a = "<div class='text-primary'>Available";
                        }
                        elseif($availability=='no'){
                          $a = "<div class='text-danger'>Not Available";
                        }
                      }
                      else{
                        
                      }
                    }
                  ?>

                <h6 class="mb-1 mt-3">$<?php echo $price;?> *
                <br><br>
                <?php echo $a;?></h6>
                <a href="<?php echo SITE_URL; ?>booking.php?r_id=<?php echo $id; ?>" <?php if($availability=='no') {?> style="display: none;" <?php } ?> class="btn btn-sm w-100 text-white custom-bg shadow-none mt-4">Book Now</a>
                </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>