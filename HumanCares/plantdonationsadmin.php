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
    <link rel="stylesheet" href="css/stylepda.css">
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

    <h1 class="heading"> Plants <span style="color:#16a085">Donated</span></h1>

    <div class="container">

        <table class="table table-striped">
            <thead class="toptable">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Given Date</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from `plant_donations`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['PlantID'];
                        $name = $row['Name'];
                        $quantity = $row['Quantity'];
                        $givendate = $row['GivenDate'];
                        echo '<tr>
                        <th scope="row"> ' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $quantity . '</td>
                        <td>' . $givendate . '</td>
                    </tr>';
                    }
                }

                ?>

        </table>
    </div>

</body>

</html>