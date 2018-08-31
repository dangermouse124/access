<?php
function is_valid_login ($username, $password) {
	global $conn;
	
	$username = mysqli_real_escape_string($conn, $username);
	
	$sql = "SELECT password FROM users WHERE username='" . $username ."'";
	//echo "<br>" . $sql;
	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$hash = $row['password'];
	return password_verify($password, $hash);
	
}

?>