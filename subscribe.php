<?php
$subsuser=$_POST['name'];
$subsemail=$_POST['email'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "INSERT INTO subscribe(subscriber_name, subscriber_email) VALUES('".$subsuser."','".$subsemail."')";
$result=$conn->query($query);
if(!$query){
	die('Invalid Query'.mysql_error());

}
else
{

	
	echo "<script>alert('You Have Subscribed Our Newsletter!')</script>";

}
	header('Location:home.php');

$conn->close();
?>