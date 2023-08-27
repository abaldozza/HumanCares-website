<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recycling Wastes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/rwuser.css">
    <style>
        body {
            background-image: url("images/rwu.jpg");
            background-size: cover;
        }

        .header {
            background-image: url("images/rwu.jpg");
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

    <h1 class="heading"> Recycling <span style="color:#16a085">Wastes</span></h1>

    <div class="container">

        <div class="box-container">
            <div class="box">
                <h3>Recycled Waste:</h3>
                <?php

                $sql = "SELECT SUM(Quantity) AS total_rwdonation FROM recycling_wastes";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $quantity = $row['total_rwdonation'];
                        echo "<p class=quantity>$quantity</p>";
                    }
                }

                ?>

            </div>
        </div>

        <button class="button">
            <a href="rwu_donate.php" class="text">Donate</a>
        </button>
    </div>

</body>

</html>