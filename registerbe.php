<?php
$firstname=$_POST['registerFirstName'];
$lastname=$_POST['registerLastName'];
$email=$_POST['registerEmail'];
$username=$_POST['registerUsername'];
$password=$_POST['registerPass'];
$password2=$_POST['registerPass2'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "INSERT INTO users(firstname, lastname, email, username, password) VALUES('".$firstname."','".$lastname."','".$email."','".$username."','".$password."')";
$result=$conn->query($query);
if(!$query){
	die('Invalid Query'.mysql_error());
	header('Location:register.html');
}
else
{
	header('Location:login.html');
}
$conn->close();
?>