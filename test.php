<?php
require_once('accessLogin.php');
require_once('valid_login.php');

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected!<br>";

 if (is_valid_login('test@email.com', 'passwor')) {
	 echo "<br>verified!";
 } else {
	 echo "<br>Denied!";
 }


?>