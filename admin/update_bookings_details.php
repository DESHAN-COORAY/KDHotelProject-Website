<?php include('../configuration/const.php'); ?>

<?php
    if(isset($_POST['bUpdate'])){

        $id = $_POST['booking_id'];
        $status = $_POST['status'];

        $query = "UPDATE table_booking SET status = '$status' WHERE b_id = '$id'"; 
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:bookings_manage.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>