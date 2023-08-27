<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tree Planting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/tpuser.css">
    <style>
        body {
            background-image: url("images/forest2.jpg");
            background-size: cover;
        }

        .heading{
            padding-top: 5rem;
        }
        
        .header {
            background-image: url("images/forest2.jpg");
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

    <h1 class="heading"> Tree <span style="color:#16a085">Planting</span></h1>
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

                $sql = "Select * from `tree_planting_admin`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['TreePId'];
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
            <a href="tpu_volunteer.php" class="text">Volunteer</a>
        </button>
    </div>

</body>

</html>