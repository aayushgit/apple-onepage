<?php
session_start();
if(empty($_SESSION['username']))
{
	header('Location:home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
	<div class="search">
		<a href="home.php"><img src="assets/images/logo.png" alt="Apple Logo"></a>
		<form action="searchlist.php" style="display: inline">
			<input type="search" placeholder="Search" method="GET">
		</form>
		<a href="updateuser.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: green;">Change Password</a>
		<a href="logout.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: red;">Log Out</a>
		
	</div>

	<h1>Update Data Into The Database</h1>
	<h3>All the details of the product please!</h3>
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
$prid=$_GET['pid'];	
$query = "SELECT * FROM products WHERE productid=".$prid."";
$result=$conn->query($query);
if($result->num_rows>0){
		while($row=mysqli_fetch_array($result))
		{
			echo"
	<div class='main'>
		<form name='add' action='updateproductbe.php' method='GET'>
			<input type='text' placeholder='Product Id'  value=".$row['productid']." name='productID'>
			<input type='text' placeholder='Name of the Product' value='".$row['productname']."' name='productName'>
			<input type='text' placeholder='Specification 1'  value='".$row['spec1']."'name='spec1'>
			<input type='text' placeholder='Specification 2' value='".$row['spec2']."' name='spec2'>
			<input type='text' placeholder='Specification 3' value='".$row['spec3']."' name='spec3'>
			<input type='number' placeholder='Stock of Product' value=".$row['productprice']." name='productStock'>
			<input type='text' placeholder='Price of Product' value=".$row['productstock']." name='productPrice'>
			<button type='submit' class='submit' value='Add Now'>Proceed</button>

		</form>
	</div>";
		}
	}

	$conn->close();
	?>
</body>
</html>