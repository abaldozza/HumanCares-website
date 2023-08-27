<?php

session_start();

include 'connection.php';
include 'functions.php';

$error = "";
if (isset($_POST['submit'])) {
    $name = $no_ic = ucwords($_POST['name']);
    $modeofpayment = $_POST['modeofpayment'];
    $mobileno = $_POST['mobileno'];
    $purpose = $_POST['purpose'];
    $amount = $_POST['amount'];

    if (empty($purpose) || empty($modeofpayment) || empty($mobileno) || empty($amount)) {
        header("Location: mdu_donate.php?error=Please fill it all out");
        exit();
    } else if (strlen($mobileno) < 11) {
        $error = "<p class=error>it must be 11 digits!</p>";
    } else if (strlen($mobileno) > 11) {
        $error = "<p class=error>it must be 11 digits!</p>";
    } else {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT user_id FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];

            // Insert donation data into the money_donations table
            $insertQuery = "INSERT INTO money_donations (user_id, Name, ModeofPayment, MobileNo, Purpose, Amount) values ($user_id, '$name', '$modeofpayment', '$mobileno', '$purpose', '$amount')";
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
    <title>Money Donation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdudonate.css">
    <style>
        body {
            background-color: rgba(116, 204, 244, .2);
        }

        .header {
            background-color: #fbf7f5;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="moneydonationsuser.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Money <span style="color:#064273">Donation</span></h1>

    <div class="container">
        <form method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="form-group my-3">
                <label>Name <span>(optional)</span> </label>
                <input type="text" class="form-control" placeholder="Enter the name" name="name" maxlength="50">
            </div>

            <div class="form-group my-3">
                <label>Mobile Number</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobileno"><?php echo $error ?>
            </div>

            <div class="form-group my-3">
                <label>Mode of Payment</label>
                <select class="form-control" name="modeofpayment">
                    <option value="">--Select--</option>
                    <option value="Gcash">Gcash</option>
                    <option value="Maya">Maya</option>
                </select>
            </div>

            <div class="form-group my-3">
                <label>Purpose</label>
                <select class="form-control" name="purpose">
                    <option value="">--Select--</option>
                    <option value="Tree Planting">Tree Planting</option>
                    <option value="Coastal Clean Up">Coastal CleanUp</option>
                    <option value="Recycling Wastes">Recycling Wastes</option>
                </select>
            </div>

            <div class="form-group my-3">
                <label>Amount</label>
                <input type="number" class="form-control" placeholder="Enter the amount" name="amount"><?php echo $error ?>
                <br>
                <button type="submit" id="button" name="submit">Submit</button>
            </div>


        </form>
    </div>

</body>

</html>