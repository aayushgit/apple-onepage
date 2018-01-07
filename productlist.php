<?php
echo"<head>
	<title>All Products</title>
	<link rel='stylesheet' href='assets/css/productlisting.css'>
</head>";
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$conn=new mysqli($host,$uname,$pass,$dbname);
$i=1;
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "SELECT * FROM products ";
$result=$conn->query($query);
if($result->num_rows>0){
	echo "
<div id='pricing'>
	<h1>Pricing of Our Products</h1>";
	echo"<table>
		<tr>
			<th>Prod.ID.</th>
			<th>Product Name</th>
			<th>Product Image</th>
			<th>Product Specs</th>
			<th>Price</th>
			<th>Stock</th>
			<th></th>
		</tr>";
		while($row=mysqli_fetch_array($result))
		{
		echo"<tr>
			<td>".$row['productid']."</td>
			<td>".$row['productname']."</td>
			<td><img src='./assets/images/img".$i++.".png' alt='' width='100px'></td>
			<td>
				<ul>
					<li>".$row['spec1']."</li>
					<li>".$row['spec2']."</li>
					<li>".$row['spec3']."</li>
				</ul>
			</td>
			<td>$".$row['productprice']."</td>
			<td>".$row['productstock']."</td>"; //TODO add images in DB make dynamic

			echo"<td><a href='dashboard.html'><button class='buynow'>Buy Now</button></a>
				<a href='buy.php'>
		</tr>";
		}
	}
	echo"</table>";
	$conn->close();
