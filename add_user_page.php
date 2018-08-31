<html>
<head>
<style>
h2 {
text-align: center;
background-color: Lightgrey;
}

.btn {
    background-color: black;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
	border-radius: 12px;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: orange !important;
}

</style>
<title>Add User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
</script>
</head>
<body>

<div class="w3-container"> 
	<div class="w3-card-4 w3-dark-grey w3-padding" style="width:95%">
		<h2><font color="black">Add a User</font></h2><br>
		<form id="add_user" action="add_user.php" method="POST">
			First name: 
			<input type="text" name="firstname" id="firstname">
			
			Last name: 
			<input type="text" name="lastname" id="lastname">	
			<br><br>
		
			Email: 
			<input type="email" name="email" id="email">
						
			Password:
			<input type="password" name="password" id="password">
						
			<div class="w3-container w3-margin w3-text-orange">
			<button class="btn" type="submit"><i class="fa fa-plus"></i> Add User</button>
			</div>
			<br>
		</form>	
	</div>
</div> 
  
  
</body>
</html>