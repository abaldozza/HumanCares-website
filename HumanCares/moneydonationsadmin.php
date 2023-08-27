<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tree Planting Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/stylemda.css">
    <style>
        .header {
            background-color: #fbf7f5;
        }
    </style>
</head>

<body>

    <!-- header section starts here -->
    <header class="header">
        <a href="adminhome.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Money <span style="color:#16a085">Raised</span></h1>

    <div class="container">
        <div class="box-container">
            <div class="box">
                <h3>Tree Planting:</h3>
                <?php

                $sql = "SELECT SUM(Amount) AS total_tp_moneydonation FROM money_donations WHERE Purpose = 'Tree Planting'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $amount = $row['total_tp_moneydonation'];
                        echo "<p class=amounts>Php$amount</p>";
                    }
                }

                ?>

            </div>

            <div class="box">
                <h3>Coastal CleanUp:</h3>
                <?php

                $sql = "SELECT SUM(Amount) AS total_ccu_moneydonation FROM money_donations WHERE Purpose = 'Coastal Clean Up'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $amount = $row['total_ccu_moneydonation'];
                        echo "<p class=amounts>Php$amount</p>";
                    }
                }

                ?>
            </div>

            <div class="box">
                <h3>Recycling Wastes:</h3>
                <?php

                $sql = "SELECT SUM(Amount) AS total_rw_moneydonation FROM money_donations WHERE Purpose = 'Recycling Wastes'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $amount = $row['total_rw_moneydonation'];
                        echo "<p class=amounts>Php$amount</p>";
                    }
                }

                ?>
            </div>


        </div>
    </div>

</body>

</html>