<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/stylevola.css">

</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="adminhome.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Volunteers</h1>

    <div class="container">

        <table class="table table-striped" style="margin-bottom: 2rem;">
            <thead class="toptable">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Activity</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile Number</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `tree_planting_user`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['TreePVId'];
                        $activity = $row['Activity'];
                        $firstname = $row['FirstName'];
                        $lastname = $row['LastName'];
                        $address = $row['Address'];
                        $mobileno = $row['MobileNo'];
                        echo '<tr>
                        <th scope="row"> ' . $id . '</th>
                        <td>' . $activity . '</td>
                        <td>' . $firstname . '</td>
                        <td>' . $lastname . '</td>
                        <td>' . $address . '</td>
                        <td>' . $mobileno . '</td>
                    </tr>';
                    }
                }

                ?>
        </table>

        <table class="table table-striped">
            <thead class="toptable">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Activity</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile Number</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `coastal_cu_user`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['CoastalCUVId'];
                        $activity = $row['Activity'];
                        $firstname = $row['FirstName'];
                        $lastname = $row['LastName'];
                        $address = $row['Address'];
                        $mobileno = $row['MobileNo'];
                        echo '<tr>
                        <th scope="row"> ' . $id . '</th>
                        <td>' . $activity . '</td>
                        <td>' . $firstname . '</td>
                        <td>' . $lastname . '</td>
                        <td>' . $address . '</td>
                        <td>' . $mobileno . '</td>
                    </tr>';
                    }
                }

                ?>

        </table>
    </div>



</body>

</html>