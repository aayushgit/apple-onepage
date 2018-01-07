<?php
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "DELETE FROM products WHERE ";
$result=$conn->query($query);
if(!$query){
	die('Invalid Query'.mysql_error());
	header('Location:register.php');
}
else
{
	header('Location:login.php');
}
$conn->close();
?>