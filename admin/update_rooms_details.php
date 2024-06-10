<?php include('../configuration/const.php'); ?>

<?php
    if(isset($_POST['rUpdate'])){

        $id = $_POST['update_id'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $query = "UPDATE table_rooms SET price = '$price', availability = '$availability' WHERE r_id = '$id'"; 
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:rooms_manage.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>