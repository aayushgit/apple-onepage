<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/loginstyle.css">
</head>
<body>
<div class="login">
	<img src="assets/images/apple_logo.png" alt="Logo of Apple" width="60px">
	<h2>Good Morning!</h2>
	<h4>This day will be great.</h4>
	<form class="loginform" name="loginform" action="loginbe.php" method="POST">
		<input type="text" placeholder= "Enter Your Username" name="loginUsername"><br>
		<input type="password" placeholder= "Enter Your Password" name="loginPass"><br>
		<button type="submit" class="joinbtn" onclick="return validateForm()">Log In</button>
	</form>
	<br>
	<div>
		<a href="register.php"><h3 style="color: #005dff;">Register Now</h3></a>
	</div>
	
</div>

<script type="text/javascript">
	function validateForm() {
		var uname = document.forms["loginform"]["loginUsername"].value;
		var pass = document.forms["loginform"]["loginPass"].value;
		if(uname == "" || pass == "")
		{
			alert("Username and Password can't be empty"); 
			return false;
		}

		else
			return true;
	}
</script>
</body>
</html>