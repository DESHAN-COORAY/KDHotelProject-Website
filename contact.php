<!DOCTYPE html>
<html>
<head>
	<title>KD HOTEL | Contact Us</title>

  <?php require('inc/links.php'); ?>

  <!-- Favicons -->
    <link href="images/kd.jpg" rel="icon" class="">

	<!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css">

  <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./javaScript/messegeValidationExternal.js"></script>

</head>
<body>

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>

    <div class="h-line bg-dark"></div>
    <p class="text-center mt-5">
      Are you planning a stay with us? Get in touch via phone or email to make your reservation today!
      <br><br>
      Stay connected with us to find out the latest buzz and special offers at <b>The KD HOTEL</b>.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-5" height="320px" src="https://www.google.com/maps/place/The+Kingsbury+Colombo/@6.9292556,79.8490837,15.47z/data=!4m8!3m7!
				1s0x3ae259259a6157fb:0x8c0cebb288af4419!5m2!4m1!1i2!8m2!3d6.9328529!4d79.8419406" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="d-flex">
              <div class="col-lg-6">
                <h5>Address</h5>
                <a href="https://goo.gl/maps/jFdoRUnTvq314zJy6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> 69, Janadhipathi Mawatha,<br>&emsp; 00100 Colombo, Sri Lanka.
                </a>
              </div>
              <div>
                <h5>Email</h5>
                <a href="mailto: info@kdhotel.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> info@kdhotel.com</a>
              </div>
            </div>

          <div class="d-flex">
            <div class="col-lg-6">
              <h5 class="mt-4">Call us</h5>
              <a href="tel: +94774149095" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 774149095</a>
              <br>
              <a href="tel: +94758297284" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 758297284</a>
            </div>
            <div>
            <h5 class="mt-4">Follow us</h5>
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

      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST" name="form1" onsubmit="return checkValidation()" action="#">
            <h5 class="mb-5"><b>Send a message</b></h5>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500;">Full Name</label>
              <input name="mFName" id="fullname" type="text" class="form-control shadow-none">
              <span id="nameerror"> </span>
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input name="mEmail" id="email" type="text" class="form-control shadow-none">
              <span id="emailerror"> </span>
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input name="mSubject" id="subject" type="text" class="form-control shadow-none">
              <span id="subjecterror"> </span>
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="mMessage" id="message" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
              <span id="messageerror"> </span>
            </div>
              <br><button name="send" type="submit" class="btn text-white custom-bg mt-2 col-lg-12">Send</button>
          </form>
        </div>
      </div>

        <?php
          // Check send button clicked or not 
          if(isset($_POST['send'])) {

          // Get data from the form
          $mFName = $_POST['mFName'];
          $mEmail = $_POST['mEmail'];
          $mSubject = $_POST['mSubject'];
          $mMessage = $_POST['mMessage'];

          // SQl Query to insert the data into database
          $sql = "INSERT INTO 	table_messages SET
                  full_name = '$mFName',
                  email = '$mEmail',
                  subject = '$mSubject',
                  message = '$mMessage'
          ";

          // execute the sql query to add data into the database
          $result = mysqli_query($conn, $sql) or die(mysqli_error());

              // Check data is inserted to the database
              if($result==TRUE){
        ?>
                          <br>
                          <script src="./javaScript/sweetalert.min.js"></script>
                          <script>
                              swal({
                                  title: "Success!",
                                  text: "Message Sent Successful!",
                                  icon: "success"
                              }).then(function(){
                                  window.location.href = "contact.php";
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
                              text: "Message Sent Failed!",
                              icon: "error"
                          }).then(function(){
                              window.location.href = "contact.php";
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

  <?php require('inc/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>