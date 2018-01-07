<?php
session_start();
$username=$_POST['loginUsername'];
$password=$_POST['loginPass'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
$result=$conn->query($query);
if(!$query){
	die('Invalid Query' .mysql_error());
}
if($result->num_rows>0)
{
	$_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
	echo "<script type='text/javascript'>location.href = 'dashboard.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Invalid Login');</script>";
	echo "<script type='text/javascript'>location.href='login.php';</script>";
}
$conn->close();
?>