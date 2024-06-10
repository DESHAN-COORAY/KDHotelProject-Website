<?php

// Create constant to store none repeat values
define('SITE_URL','http://localhost/KDHotelProject/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','kdhoteldb');

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());

?>