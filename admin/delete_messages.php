<?php

    // Include const.php file
    include('../configuration/const.php');

    // Get the ID of Message to be deleted
    $M_id = $_GET['m_id'];

    // Create SQL query to the Delete Message
    $sql = "DELETE FROM table_messages WHERE m_id = $M_id";

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
                text: "Message Delete Successful!",
                icon: "success"
            }).then(function(){
                window.location.href = "./user_messages.php";
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
                text: "Message Delete Failed!",
                icon: "error"
            }).then(function(){
                window.location.href = "./user_messages.php"; 
                console.log('The Ok Button was clicked.');
            });
        </script>
<?php
    }
?>