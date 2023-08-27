<?php

function check_login($con)
{

	if (isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);
			$user_id = $user_data['user_id'];

			// Set the user_id in the session
			$_SESSION['user_id'] = $user_id;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;
}

function validate($input) {
    // Assuming you want to perform some basic validation here
    // You might want to use more sophisticated validation techniques
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}