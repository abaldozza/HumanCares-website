<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `tree_planting_admin` where treepid=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "deleted successfully";
        header("Location: treeplantingadmin.php");
    } else {
        die(mysqli_error($con));
    }
}
