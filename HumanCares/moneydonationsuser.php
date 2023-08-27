<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Money Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/moneydonationuser.css">
    <style>
        body {
            background-image: url("images/mdu.jpg");
            background-size: cover;
        }

        .header {
            background-image: url("images/mdu.jpg");
            background-size: cover;
        }
    </style>
</head>
2
<body>

    <!-- header section starts here -->
    <header class="header">
        <a href="userhome.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Money <span style="color:#064273">Donation</span></h1>

    <div class="container">
        <div class="box-container">
            <div class="box">
                <h3>Total Amount Donated:</h3>
                <?php

                $sql = "SELECT SUM(Amount) AS total_money_donation FROM money_donations";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $quantity = $row['total_money_donation'];
                        echo "<p class=amounts>Php $quantity</p>";
                    }
                }

                ?>

            </div>
        </div>
        <br>
        <button class="button">
            <a href="mdu_donate.php" class="text">Donate</a>
        </button>

    </div>



</body>

</html>