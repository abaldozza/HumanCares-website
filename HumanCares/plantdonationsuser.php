<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plant Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/plantdonationuser.css">
    <style>
        body {
            background-image: url("images/plantdonation.jpg");
            background-size: cover;
        }

        .header {
            background-image: url("images/plantdonation.jpg");
            background-size: cover;
        }
    </style>
</head>

<body>

    <!-- header section starts here -->
    <header class="header">
        <a href="userhome.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Plant <span style="color:#16a085">Donation</span></h1>

    <div class="container">
        <div class="box-container">
            <div class="box">
                <h3>Trees Donated:</h3>
                <?php

                $sql = "SELECT SUM(Quantity) AS total_tree_plantdonation FROM plant_donations WHERE Type = 'Tree'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $quantity = $row['total_tree_plantdonation'];
                        echo "<p class=quantity>$quantity</p>";
                    }
                }

                ?>

            </div>
            <div class="box">
                <h3>Plants Donated:</h3>
                <?php

                $sql = "SELECT SUM(Quantity) AS total_plant_plantdonation FROM plant_donations WHERE Type = 'Flower Plant'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $quantity = $row['total_plant_plantdonation'];
                        echo "<p class=quantity>$quantity</p>";
                    }
                }

                ?>

            </div>
            <div class="box">
                <h3>Seeds Donated:</h3>
                <?php

                $sql = "SELECT SUM(Quantity) AS total_seed_plantdonation FROM plant_donations WHERE Type LIKE '%seed'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $quantity = $row['total_seed_plantdonation'];
                        echo "<p class=quantity>$quantity</p>";
                    }
                }

                ?>

            </div>
        </div>

        <button class="button">
            <a href="pdu_donate.php" class="text">Donate</a>
        </button>

    </div>



</body>

</html>