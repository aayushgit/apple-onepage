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

			echo"<td><button class='buynow' id='myBtn'>Buy Now</button>";
				echo"
			<div id='myModal' class='modal'>
			<div class ='modal-content'>
				<span class ='close'>&times;</span>
				<h1 style='color:white; margin-bottom:0px'>Thank You For Shopping with US </h1>
				<h4 style='color:white; margin-top:4px;text-align:center;'>The product will be delivered to your Address.</h4>
				<form action='sellproduct.php' class='popupform' method='POST' style='float:left;width:100%;'>
				    <input type='text' name='customername' placeholder='Please Enter Your Name'>
				    <input type='text' name='customeremail' placeholder='Please Enter Your Email'>
				    <input type='text' name='customercontact' placeholder='Please Enter Your Contact Number'>
				    <input type='text' name='nameofproduct' placeholder='' value='".$row['productname']."'><br> 
				    <span class='total'><h3 style='color:#fff;text-align:center'>The Total Price is:".($row['productprice'])."</h3></span>
				    <a href='sellproduct.php?pid=".$row['productid']."'><button class='buynow'>Order</button></a>
				    
				</form>
			</div>
			</div>";  //Modal content and model div
		echo"</tr>";
	}
	echo"</table>";
	
		}
?>
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
	$conn->close();
