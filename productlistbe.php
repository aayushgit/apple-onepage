<html>

<body>
	<div class="search">
		<a href="home.php"><img src="assets/images/logo.png" alt="Apple Logo"></a>
		<form action="searchlist.php" style="display: inline">
			<input type="text" placeholder="Search" name="searchq">
			
		</form>
		<a href="updateuser.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: green;">Change Password</a>
		<a href="logout.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: red;">Log Out</a>
		
	</div>

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
if($conn->connect_error)
	{
		die("Error in Connection");
	}
$query = "SELECT * FROM products ";
$result=$conn->query($query);
if($result->num_rows>0){
	echo"<div id='pricing'>
	<h1 style='margin-bottom:0px;'>All of Our Products</h1>
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
			<td><img src='./assets/images/iphonex.png' alt='' width='100px'></td>
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
	echo"</table>";
	$conn->close();

?>



</div>

</body>
</html>
