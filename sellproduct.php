<?php
echo"<head>
	
	<link rel='stylesheet' href='assets/css/productlisting.css'>
</head>";
$name=$_POST['customername'];
$email=$_POST['customeremail'];
$contact=$_POST['customercontact'];
$product=$_POST['nameofproduct'];
$number=1;
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$prid=$_GET['pid'];	

$salesrecordq = "INSERT INTO salesrecord(customername,customeremail, customercontact, customerproduct,numberofproduct) VALUES('".$name."','".$email."','".$contact."','".$product."','".$number."')";
$resultsale=$conn->query($salesrecordq);
$query = "SELECT * FROM products WHERE productid=".$prid."";
echo $query;
$result=$conn->query($query);
if($result->num_rows>0){

	}
	// echo "<script type='text/javascript'>location.href='productlistbe.php';</script>";

	$conn->close();
	?>