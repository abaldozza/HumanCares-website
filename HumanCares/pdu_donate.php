<?php

session_start();

include 'connection.php';
include 'functions.php';

$error = "";
if (isset($_POST['submit'])) {
    $name = $no_ic = ucwords($_POST['name']);
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];

    if (empty($name) || empty($type) || empty($quantity)) {
        header("Location: mdu_donate.php?error=Please fill it all out");
        exit();
    } else {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT user_id FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];

            // Insert donation data into the money_donations table
            $insertQuery = "INSERT INTO plant_donations (user_id, Name, Type, Quantity) values ($user_id, '$name', '$type', '$quantity')";
            $insertResult = mysqli_query($con, $insertQuery);
            if ($insertResult) {
                header('Location: d_aftermessage.php');
                exit();
            } else {
                die("Failed to insert donation data!" . mysqli_error($con));
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
    <title>Plant Donation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pdudonate.css">
    <style>
        body {
            background-color: rgba(184, 216, 190, .2);
        }

        .header {
            background-color: #fbf7f5;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="plantdonationsuser.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Plant <span style="color:#16a085">Donation</span></h1>

    <div class="container">
        <form method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="form-group my-3">
                <label>Name of the Plant</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="name" maxlength="50">
            </div>

            <div class="form-group my-3">
                <label>Type</label>
                <select class="form-control" name="type">
                    <option value="">--Select--</option>
                    <option value="Tree">Tree</option>
                    <option value="Flower Plant">Flower Plant</option>
                    <option value="Vegetable Seed">Vegetable Seed</option>
                    <option value="Flower Seed">Flower Seed</option>
                </select>
            </div>

            <div class="form-group my-3">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Enter the quantity" name="quantity"><?php echo $error ?>
            </div>

            <br>
            <button type="submit" id="button" name="submit">Submit</button>

        </form>
    </div>

</body>

</html>