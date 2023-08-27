<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `coastal_cu_admin` where coastalcuid=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "deleted successfully";
        header("Location: coastalcuadmin.php");
    } else {
        die(mysqli_error($con));
    }
}
