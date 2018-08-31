<?php
function is_valid_login ($email, $password) {
	global $conn;
	$sql = "SELECT password FROM users WHERE email='" . $email ."'";
	echo "<br>" . $sql;
	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$hash = $row['password'];
	return password_verify($password, $hash);
	
}


?>