<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coastal CleanUp</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/coastaluser.css">
    <style>
        body {
            background-image: url("images/beach2.jpg");
            background-size: cover;
        }

        .heading{
            padding-top: 5rem;
        }

        .header {
            background-image: url("images/beach2.jpg");
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

    <h1 class="heading"> Coastal <span style="color:#064273">CleanUp</span></h1>
    <label class="sched">SCHEDULES</label>
    <div class="container">

        <table class="table table-striped">
            <thead class="toptable">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody class="bodytable">

                <?php

                $sql = "Select * from `coastal_cu_admin`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['CoastalCUId'];
                        $location = $row['Location'];
                        $date = $row['Date'];
                        $time = $row['Time'];
                        echo '<tr>
                        <th scope="row"> ' . $id . '</th>
                        <td>' . $location . '</td>
                        <td>' . $date . '</td>
                        <td>' . $time . 'am</td>
                    </tr>';
                    }
                }

                ?>
            </tbody>
        </table>

        <button class="button">
            <a href="ccuu_volunteer.php" class="text">Volunteer</a>
        </button>
    </div>

</body>

</html>