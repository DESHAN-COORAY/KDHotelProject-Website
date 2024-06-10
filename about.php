<!DOCTYPE html>
<html>
<head>
	<title>KD HOTEL | About Us</title>

  <?php require('inc/links.php'); ?>

  <!-- Favicons -->
    <link href="images/kd.jpg" rel="icon" class="">

	<!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>
      .box{
        border-top-color: var(--teal) !important;
      }
    </style>

  <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</head>
<body>

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>

    <div class="h-line bg-dark"></div>
    <p class="text-center mt-5">
      The story of <b>KD Hotel</b> which opened its doors in 2022 is a splendid tale of continual improvement of product and the 
      highest standards of quality in hospitality.

      Having expertise in hospitality our vision and beliefs are firmly grounded in extending a true personalized service to all our guests, 
      laced with an unforgettable luxury hotel experience.

      The brand has enticed many elite personalities from around the world including heads of government, prime ministers of leading nations, 
      royalty, well known sports and entertainment personalities and many more.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Taking A Long-Term View</h3>
        <p>
          Under our founder's visionary leadership, the Group quickly expanded into and other emerging markets in Sri Lanka. 
          This strong pioneering spirit is now deeply entrenched in the way our leaders operate and make business decisions.
          <br><br>
          Our leadership team brings a wealth of experience and expertise from different industries to chart new frontiers for the Group. 
          They adopt a disciplined approach as part of an enterprise-wide risk management and governance framework.
          <br><br>
          Our leaders are committed to taking a long-term view. 
          Besides developing talent and capabilities within the company, they are driven to build an organisation that works to benefit and 
          serve the people and communities where we operate.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/kalpa.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">150+ ROOMS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">170+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/kalpa.jpg" class="w-100 mb-3">
            <p>Chairman & Executive Director</p>
            <h4 class="mt-2"><b>Deshan Cooray</b></h4>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/group_CEO.jpg" class="w-100 mb-3">
            <p>Group Chief Executive Officer & Executive Director</p>
            <h4 class="mt-2"><b>Lisa Smith</b></h4>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/group_fo.jpg" class="w-100 mb-3">
            <p>Group Chief financial Officer & Executive Director</p>
            <h4 class="mt-2"><b>Tharindu Gamlath</b></h4>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/general_manager.jpg" class="w-100 mb-3">
            <p>Group Chief Investment Officer & Executive Director</p>
            <h4 class="mt-2"><b>Brendon Freeman</b></h4>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/am.jpg" class="w-100 mb-3">
            <p>Company Secretary</p>
            <h4 class="mt-2"><b>Abdulla Musnath</b></h4>
          </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
</body>
</html>