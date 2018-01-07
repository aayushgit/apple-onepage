<?php
echo"<head>
	<title>Search Products</title>
	<link rel='stylesheet' href='assets/css/productlisting.css'>
</head>";
$searchq = $_GET['searchq'];
$host="localhost";
$uname="root";
$pass="";
$dbname="apple";
$i=1;
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "SELECT * FROM products WHERE ucase(productname) LIKE ucase('%".$searchq."%')"; //% means search anything with the text
echo($query);
$result=$conn->query($query);
if($result->num_rows>0){
	echo"<div id='pricing'>
	<h1 style='margin-bottom:0px;'>Search Results for: " .$searchq. "</h1>
	<h3 style='text-align:center; color:#c9c9c9;font-weight:100; margin-top:0px;'>All the details of the products.</h3>";

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

			echo"<td><a href='dashboard.html'><button class='buynow'>Edit</button></a>
				<a href='deleteproduct.php'><button class='buynow' style='background-color: red'>Delete</button></a></td>
		</tr>";
		}
	}

	else{
		echo"<div id='pricing'>
	<h1 style='margin-bottom:0px;'>Search Results for: " .$searchq. "</h1>
	<h3 style='text-align:center; color:#c9c9c9;font-weight:100; margin-top:0px;'>There are no results to display.</h3>";
	}
	echo"</table>";
	$conn->close();
