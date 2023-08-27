<?php

session_start();

include("connection.php");
include("functions.php");

//if (isset($_POST['user_name']) && isset($_POST['password'])) {
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = validate($_POST['user_name']);
	$password =  validate($_POST['password']);

	if (empty($user_name)) {
		header("Location: login.php?error=username is required");
		exit();
	} else if (empty($password)) {
		header("Location: login.php?error=password is required");
		exit();
	} else {
		$query = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
		$result = mysqli_query($con, $query);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			$user_id = $row['user_id']; // Fetch the user_id from the result
			$_SESSION['user_id'] = $user_id; // Set the user_id in the session

			if ($row['user_name'] === "admin" && $row['password'] === "admin123") {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['password'] = $row['password'];
				header("Location: adminhome.php");
				exit();
			} else if ($row['user_name'] === $user_name && $row['password'] === $password) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['password'] = $row['password'];
				header("Location: userhome.php");
				exit();
			} else {
				header("Location: login.php?error=incorect username or password");
				exit();
			}
		} else {
			header("Location: login.php?error=incorect username or password");
			exit();
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .home{
            background: url(images/jungle.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>

</head>

<body>

    <header class="header">
        <a class="logo"><i class="fas fa-globe-asia"></i> HumanCares</a>
    </header>

    <section class="home">
        <div class="content">
            <h2>Acting Locally, Impacting Globally</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta tempora illo dolores suscipit? Aliquid
                adipisci, obcaecati assumenda inventore rem ducimus veniam voluptatibus, molestias consequatur
                distinctio fugit pariatur ipsa, exercitationem vitae!</p>
        </div>

        <div class="wrapper-login">
            <h2>Login</h2>
            <form method="post">
                <div class="input-box">
                    <span class="icon"><i class='bx bx-envelope'></i></span>
                    <input type="text" name="user_name" required>
                    <label>Enter your username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bx-lock-alt'></i></span>
                    <input type="password" name="password" required>
                    <label>Enter your password</label>
                </div>

                <?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			    <?php } ?>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button class="btn" type="submit">Login</button>

                <div class="register-link">
                    <p>
                        Don't have an account yet? <a href="signup.php">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
<html>