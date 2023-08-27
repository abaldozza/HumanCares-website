<?php

session_start();

include 'connection.php';
include 'functions.php';

$error = "";

if (isset($_POST["submit"])) {
    // Get the selected schedule from the form
    $activity = $_POST['activity'];
    $firstname = $no_ic = ucwords($_POST['firstname']);
    $middlename = $no_ic = ucwords($_POST['middlename']);
    $lastname = $no_ic = ucwords($_POST['lastname']);
    $address = $no_ic = ucwords($_POST['address']);
    $mobileno = $_POST['mobileno'];
    $schedule_id = $_POST["schedule"];

    // Get the details of the selected schedule from the database
    $sql = "SELECT location, date, time FROM coastal_cu_admin WHERE coastalcuid = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $schedule_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if (empty($activity) || empty($firstname) || empty($lastname) || empty($address) || empty($mobileno)) {
        header("Location: ccuu_volunteer.php?error=Please fill it all out");
        exit();
    } else if (strlen($mobileno) < 11) {
        header("Location: ccuu_volunteer.php?error=Phone number must be 11 digit");
        exit();
    } else if (strlen($mobileno) > 11) {
        header("Location: ccuu_volunteer.php?error=Phone number must be 11 digit");
        exit();
    }
    if ($result->num_rows == 1) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT user_id FROM users WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];

            // Insert the volunteer details into the database, including the foreign key coastalcuid
            $insertQuery = "INSERT INTO coastal_cu_user (user_id, coastalcuid, activity, firstname, middlename, lastname, address, mobileno) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($insertQuery);
            $stmt->bind_param("isssssss", $user_id, $schedule_id, $activity, $firstname, $middlename, $lastname, $address, $mobileno);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                header('Location: v_aftermessage.php');
                exit();
            } else {
                die("Failed to insert donation data!" . $stmt->error);
            }
        } else {
            echo "<p>Error: Invalid schedule selected.</p>";
        }
    }
}

// Close the database connection
$con->close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coastal CleanUp Volunteer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styletpuv.css">
    <style>
        body {
            background-color: rgba(116, 204, 244, .2);
        }

        #button {
            float: right;
            padding: 10px;
            border-radius: 5px;
            margin-top: 1rem;
            margin-bottom: 2rem;
            border: 2px solid #999;
            box-shadow: var(--box-shadow);
            background-color: #064273;
            cursor: pointer;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        #button:hover {
            background: #02006c;
        }

        .header {
            background-color: #fbf7f5;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a href="coastalcuuser.php" class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>
    </header>
    <br><br><br>
    <!-- header section ends here -->

    <h1 class="heading"> Coastal CleanUp <span style="color:#064273">Volunteer</span></h1>

    <div class="container">
        <form method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="form-group my-3">
                <label>Activity</label>
                <select class="form-control" name="activity">
                    <option value="Tree Planting">Coastal CleanUp</option>
                </select>
            </div>
            <div class="form-group my-3">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" maxlength="50"><?php echo $error ?>
            </div>
            <div class="form-group my-3">
                <label>Middle Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name" name="middlename" maxlength="50">
            </div>
            <div class="form-group my-3">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" maxlength="50"><?php echo $error ?>
            </div>
            <div class="form-group my-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" maxlength="100"><?php echo $error ?>
            </div>
            <div class="form-group my-3">
                <label>Mobile Number</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobileno"><?php echo $error ?>
            </div>
            <div class="form-group my-3">
                <label>Schedule</label>
                <?php
                include 'connection.php';
                $sql = "SELECT coastalcuid, location, date, time FROM coastal_cu_admin";
                $result = $con->query($sql);

                // Display the schedule options in a dropdown menu
                if ($result->num_rows > 0) {
                    echo "<select class='form-control' name='schedule' id='schedule'>";
                    while ($row = $result->fetch_assoc()) {
                        $schedule = $row["location"] . ", " . $row["date"] . " " . $row["time"];
                        echo "<option value='" . $row["treepid"] . "'>" . $schedule . "</option>";
                    }
                    echo "</select>";
                }
                ?>
                <br>
                <button type="submit" id="button" name="submit">Submit</button>
            </div>


        </form>
    </div>

</body>

</html>