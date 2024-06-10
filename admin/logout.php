<!-- constants.php for Site Url -->
<?php include('../configuration/const.php'); ?>

<?php

session_start();

// End the Login Session and Redirect to index page
session_destroy();

//Redirect to index page
header('location:'.SITE_URL.'index.php');

?>