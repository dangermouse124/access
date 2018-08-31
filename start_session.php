<?php
require_once('accessLogin.php');
require_once('valid_login.php');
session_start();

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected!<br>";

$username = filter_input(INPUT_POST, 'full_name');
$username = preg_replace('/[^A-Za-z]/', '', $username);
$username = strtolower($username);
$password = filter_input(INPUT_POST, 'password');

if (is_valid_login($username, $password)) {
	 //echo "<br>verified!";
	 $_SESSION['is_valid_user'] = true;
	include('success_page.html');
	exit();
} else {
	//echo "<br>denied!";
	include('error_page.html');
	exit();
}

mysqli_close($conn);
 


?>