<?php
$username=$_POST['currentUsername'];
$oldpass=$_POST['oldPass'];
$newpass=$_POST['newPass'];
$newpass2=$_POST['newPass2'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "SELECT * FROM users WHERE username='".$username."' AND password='".$oldpass."' ";
$result=$conn->query($query);
if($result->num_rows>0)
{
	if($newpass == $newpass2)
	{
	$updatequery="UPDATE users SET password='".$newpass."' WHERE username='".$username."'";
	$conn->query($updatequery);
	echo "<script>alert('Data Has Been Updated!')</script>"; 
	}
	
	else
	{
	echo("Passwords Not Matching");
	}	
}
if(!$query){
	die('Invalid Query'.mysql_error());
	header('Location:updateuser.html');
}
else
{
	header('Location:login.html');
}
$conn->close();
?>