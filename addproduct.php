<?php
$productName=$_GET['productName'];
$productSpec1=$_GET['spec1'];
$productSpec2=$_GET['spec2'];
$productSpec3=$_GET['spec3'];
$productStock=$_GET['productStock'];
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

$addproductquery="INSERT INTO products (productname, spec1, spec2, spec3, productstock, productprice) VALUES ('".$productName."','".$productSpec1."', '".$productSpec2."','".$productSpec3."','".$productStock."',".$productPrice.")";
$result=$conn->query($addproductquery);
if(!$addproductquery){
	die("Invalid Query");
}
else{
	echo "<script>alert('Product Added')</script>";
	
}
$conn->close();
?>