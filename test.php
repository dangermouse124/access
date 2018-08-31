<?php
session_start();
require_once('valid_user.php');
	 echo "<br>You have reached the verified zone!<br>";
	 session_destroy();
 

?>