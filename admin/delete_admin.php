<?php

    // Include const.php file
    include('../configuration/const.php');

    // Get the ID of Admin to be deleted
    $A_id = $_GET['a_id'];

    // Create SQL query to the Delete Admin
    $sql = "DELETE FROM table_admin WHERE a_id = $A_id";

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
                text: "Admin Delete Successful!",
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
                text: "Admin Delete Failed!",
                icon: "error"
            }).then(function(){
                window.location.href = "./admin_manage.php"; 
                console.log('The Ok Button was clicked.');
            });
        </script>
<?php
      }
?>