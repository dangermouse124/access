<?php
require_once('accessLogin.php');

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected!<br>";


//function add_user ($email, $password) {
	//global $conn;
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$username = preg_replace('/[^A-Za-z]/', '', $firstname . $lastname);
	$username = strtolower($username);

	$sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('" . $firstname . "'" . ", "  ."'" . $lastname . "'" . ", "  ."'" . $username . "'" .", " . "'" . $email ."'" . ", " . "'" . $hash . "')";
	//echo $sql . "<br>";
	
	if (mysqli_query($conn, $sql)) {
		$returnMsg["message"] = "Successful DB entry!";
		include('success_page.html');
		exit();
	
	} else {
		$returnMsg["message"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
		include('error_page.html');
		exit();
	}

	mysqli_close($conn);
	
//}


?>