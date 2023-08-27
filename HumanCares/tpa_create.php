<?php
session_start();

include 'functions.php';
include 'connection.php';

if (isset($_POST['submit'])) {
    $location = $no_ic = ucwords($_POST['location']);
    $date = $_POST['date'];
    $time = $_POST['time'];

    if (empty($location) || empty($date) || empty($time)) {
        header("Location: tpa_create.php?error=Please fill it all out");
        exit();
    } else {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT user_id FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];

            // Insert donation data into the recycling wastes table
            $insertQuery = "insert into `tree_planting_admin` (user_id, Location, Date, Time) values ('$user_id', '$location', '$date', '$time')";
            $insertResult = mysqli_query($con, $insertQuery);
            if ($insertResult) {
                // echo "Data inserted successfully";
                header('Location: treeplantingadmin.php');
            } else {
                die("failed to connect!");
            }
        } else {
            die("User not found!");
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tree Planting Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tpac.css">
    <style>
        .header {
            background-color: #fbf7f5;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="treeplantingadmin.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <br><br><br>
    <!-- header section ends here -->

    <h1 class="heading"> Tree <span style="color:#16a085">Planting</span></h1>

    <div class="container">
        <form method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-group my-3">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter the location" name="location" maxlength="100">
            </div>
            <div class="form-group my-3">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" placeholder="Enter the time" name="time">
            </div>
            <button type="submit" id="button" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>