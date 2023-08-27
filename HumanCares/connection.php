<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "humancaresdb";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) {
	die("failed to connect!");
}
