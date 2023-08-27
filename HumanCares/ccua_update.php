<?php

include 'connection.php';
$id = $_GET['updateid'];
$sql = "Select * from `coastal_cu_admin` where coastalcuid=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$location = $row['Location'];
$date = $row['Date'];
$time = $row['Time'];

if (isset($_POST['submit'])) {
    $location = $no_ic = ucwords($_POST['location']);
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "update `coastal_cu_admin` set coastalcuid=$id, location='$location', date='$date', time='$time' where coastalcuid=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data updated successfully";
        header('Location: coastalcuadmin.php');
    } else {
        die("failed to connect!");
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
    <link rel="stylesheet" href="css/tpau.css">
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="treeplantingadmin.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <br><br><br>
    <!-- header section ends here -->

    <h1 class="heading"> Coastal <span style="color:#16a085">CleanUp</span></h1>

    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter the location" name="location" value=<?php echo "'$location'"; ?>>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date" value=<?php echo $date; ?>>
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" placeholder="Enter the time" name="time" value=<?php echo $time; ?>>
            </div>
            <button type="submit" id="button" name="submit">Update</button>
        </form>
    </div>

</body>

</html>