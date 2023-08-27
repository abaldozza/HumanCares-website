<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coastal CleanUp Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/coastala.css">

    <style>
    </style>
</head>

<body>

    <!-- header section starts here -->
    <header class="header">
        <a href="adminhome.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <!-- header section ends here -->

    <h1 class="heading"> Coastal CleanUp <span style="color:#064273">Areas</span></h1>

    <div class="container">

        <table class="table table-striped">
            <thead class="toptable">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

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
                        <td>' . $time . '</td>

                        <td>
                        <a href="ccua_update.php? updateid=' . $id . '" class="logo"><i class="fas fa-edit"></i></a>
                        <a href="ccua_delete.php? deleteid=' . $id . '" class="logo"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>';
                    }
                }

                ?>

        </table>
        <button class="button">
            <a href="ccua_create.php" class="text">Add</a>
        </button>
    </div>

</body>

</html>