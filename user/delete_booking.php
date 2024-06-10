<?php

    // Include const.php file
    include('../configuration/const.php');

    // Get the ID of Bokking to be deleted
    $B_id = $_GET['b_id'];

    // Create SQL query to the Delete Booking
    $sql = "DELETE FROM table_booking WHERE b_id = $B_id";

    // Execute the Query
    $result = mysqli_query($conn,$sql);

    // check the Query executed or not
    if($result==TRUE){

    // When Query executed successfully
?>
        <br>
        <script src="../javaScript/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Success!",
                text: "Booking Delete Successful!",
                icon: "success"
            }).then(function(){
                window.location.href = "./user_bookings.php";
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
                text: "Booking Delete Failed!",
                icon: "error"
            }).then(function(){
                window.location.href = "./user_bookings.php"; 
                console.log('The Ok Button was clicked.');
            });
        </script>
<?php
    }
?>