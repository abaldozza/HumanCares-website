<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users2 (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);
		$_SESSION['user_id'] = $user_id;
		header("Location: login.php");
		die;
	} else {
		header("Location: signup.php?error=Please fill it all out");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="css/newlogin.css">
	<style>
		body {
			background-image: url("images/jungle.jpg");
			background-size: cover;
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
            <h2>Sign Up</h2>
            <form method="post">
                <div class="input-box">
                    <span class="icon"><i class='bx bx-envelope'></i></span>
                    <input type="username" required>
                    <label>Enter your username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bx-lock-alt'></i></span>
                    <input type="password" required>
                    <label>Enter your password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn">Signup</button>

                <div class="register-link">
                    <p>
                        Already have an account? <a href="login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </section>


	<!-- <div id="box">

		<form method="post">

			<div class="content">
				<h3>Signup</h3>
			</div>

			<label>Username</label>
			<input id="text" type="text" name="user_name"><br>

			<label>Password</label>
			<input id="text" type="password" name="password"><br>

			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?><br>

			<button id="button" type="submit">Signup</button><br><br>
			<a href="login.php" class="signup">Click to Login</a>
		</form>
	</div> -->
</body>

</html>