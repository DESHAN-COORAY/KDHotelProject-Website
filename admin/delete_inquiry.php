<?php

    // Include const.php file
    include('../configuration/const.php');

    // Get the ID of Inquiry to be deleted
    $I_id = $_GET['i_id'];

    // Create SQL query to the Delete Inquiry
    $sql = "DELETE FROM table_inquiries WHERE i_id = $I_id";

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
                text: "Inquiry Delete Successful!",
                icon: "success"
            }).then(function(){
                window.location.href = "./kdhuser_inquiries.php";
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
                text: "Inquiry Delete Failed!",
                icon: "error"
            }).then(function(){
                window.location.href = "./kdhuser_inquiries.php"; 
                console.log('The Ok Button was clicked.');
            });
        </script>
<?php
    }
?>