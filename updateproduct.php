<?php
session_start();
if(!(isset($_SESSION["username"])))
	echo "<script language=text/javascript>location.href='login.php';</script>";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Apple Dashboard</title>
	<link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
	<div class="search">
		<a href="index.php"><img src="assets/images/logo.png" alt="Apple Logo"></a>
		<form action="searchlist.php" style="display: inline">
			<input type="search" placeholder="Search">
		</form>
		<a href="updateuser.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: green;">Change Password</a>
		<a href="logout.php" style="float:right;margin: 16px 30px 12px 12px; text-decoration: none;color: red;">Log Out</a>
		
	</div>

	<h1>Insert Data Into The Database</h1>
	<h3>All the details of the product please!</h3>

	<div class="main">
		<form name="add" action="editproduct.php" method="GET">
			<input type="text" placeholder="Product Id" name="productID">
			<input type="text" placeholder="Name of the Product" name="productName">
			<!-- <select type="text" placeholder="Storage Size" name="productStorage">
				<option value="16GB">16 GB</option>
				<option value="16GB">16 GB</option>
				<option value="16GB">16 GB</option>
				<option value="16GB">16 GB</option>


			</select> -->
			<input type="text" placeholder="Specification 1" name="spec1">
			<input type="text" placeholder="Specification 2" name="spec2">
			<input type="text" placeholder="Specification 3" name="spec3">
			<input type="number" placeholder="Stock of Product" name="productStock">
			<input type="text" placeholder="Price of Product" name="productPrice">
			<button type="submit" class="submit" value="Add Now">Proceed</button>



		</form>
		<a href="productlistbe.php"><button type="submit" class="submit" value="List All">List All </button></a>
	</div>

</body>
</html>