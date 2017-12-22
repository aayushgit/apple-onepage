<?php
$productName=$_GET['productName'];
$productPrice=$_GET['productPrice'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}

$addproductquery="insert into products (productname,productprice) values ('".$productName."','".$productPrice."')";
$result=$conn->query($addproductquery);
if(!$addproductquery){
	die("Invalid Query");
}
$conn->close();
?>