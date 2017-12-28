<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/loginstyle.css">
</head>
<body>
<div class="login">
	<img src="assets/images/apple_logo.png" alt="Logo of Apple" width="60px">
	<h2>Change Password?</h2>
	<h4>No worries, It's Easy.</h4>
	<form class="loginform" name="updateform" action="updateuserbe.php" method="POST">
		<input type="text" placeholder= "Enter Your Username" name="currentUsername"><br>
		<input type="password" placeholder= "Enter Your Old Password" name="oldPass"><br>
		<input type="password" placeholder= "Enter Your New Password" name="newPass"><br>
		<input type="password" placeholder= "Enter Your New Password Again" name="newPass2"><br>

		<button type="submit" class="joinbtn" onclick="return validateForm()">Change</button>
	</form>
	
</div>

<script type="text/javascript">
	function validateForm() {
		var username = document.forms["updateform"]["currentUsername"].value;
		var oldpass = document.forms["updateform"]["oldPass"].value;
		var newpass = document.forms["updateform"]["newPass"].value;
		var newpass2 = document.forms["updateform"]["newPass2"].value;
		if(username == "" || oldpass == "" || newpass == "" newpass2 == "")
		{
			alert("All Fields Are Required!"); 
			return false;
		}

		else
			return true;
	}
</script>
</body>s
</html>