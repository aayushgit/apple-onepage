<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="assets/css/loginstyle.css">
</head>
<body>
<div class="login" style="padding:60px 30px 20px 30px;">
	<a href="home.php"><img src="assets/images/apple_logo.png" alt="Logo of Apple" width="60px"></a>
	<h2>Good Morning!</h2>
	<h4>This day will be great.</h4>
	<form class="loginform" name="registerform" action="registerbe.php" method="POST">
		<input type="text" placeholder= "Enter Your First Name" name="registerFirstName"><br>
		<input type="text" placeholder= "Enter Your Last Name" name="registerLastName"><br>
		<input type="text" placeholder= "Enter Your Email" name="registerEmail"><br>
		<input type="text" placeholder= "Enter Your Username" name="registerUsername"><br>
		<input type="password" placeholder= "Enter Your Password" name="registerPass"><br>
		<input type="password" placeholder= "Enter Your Password Again" name="registerPass2"><br>

		<button type="submit" class="joinbtn" onclick="return validateForm()">Register</button>
		<div>
		<a href="login.php"><h3 style="color: #005dff;">Login Now</h3></a>
	</div>
	</form>
	
</div>

<script type="text/javascript">
	function validateForm() {
		var fname = document.forms["registerform"]["registerFirstName"].value;
		var lname = document.forms["registerform"]["registerLastName"].value;
		var email = document.forms["registerform"]["registerEmail"].value;
		var uname = document.forms["registerform"]["registerUsername"].value;
		var pass = document.forms["registerform"]["registerPass"].value; 
		var pass2 = document.forms["registerform"]["registerPass2"].value;
		if(fname == "" || lname == "" || email == "" uname == "" || pass == "" || pass2 == "")
		{
			alert("All Fields Are Required!"); 
			return false;
		}

		else
			return true;
	}
</script>
</body>
</html>