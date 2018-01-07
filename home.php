<?php
session_start();
?>
<html>
<head>
	<title>World Of Mac. The Ultimate Portal for all Apple Products.</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="nav">
	<ul>
		<li><a href="home.php"><img src="./assets/images/logo.png" alt="Site Logo" style="width: 25px;
margin: 11px 40px 0px 40px;"></a></li>
		<li><a href="#">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#pricing">Pricing</a></li>
		<li><a href="#join">Join Us</a></li>
		<li><a href="register.php"><img src="./assets/images/user.png" style="width: 24px;padding: 12px;"></a></li>

	</ul>
</div>

<div class="header">
	<h1>New Apple Family</h1>
	<p>An iMac with 8 cores is remarkable enough. </p>
	<img src="./assets/images/apple.png" alt="">
	
	
</div>


<div id="about">
	<h1>About Products</h1>
	<div class="vertical20"></div>
	<div class="product">
		<div class="wrapperpro">
		<img src="./assets/images/code.png" alt="">
		<h2>Best Design</h2>
		<p>Apple serves the best product available in market.The best products produce an unparallel performance and are favored by the market. lorem</p>
		</div>

	<div class="vertical20"></div>
		<div class="wrapperpro2">
		<img src="./assets/images/battery.png" alt="">
		<h2>Long Battrey Life</h2>
		<p>Apple has always been known for having the most long lasting battreys both in its Notebook series and phone series as well.</p>
		</div>

	<div class="vertical20"></div>
		<div class="wrapperpro3">
		<img src="./assets/images/shield.png" alt="">
		<h2>100% Secured</h2>
		<p>When it comes to security, Apple is the global leader. Security is and has always been an unparallel attribute of an Apple phone.</p>
		</div>

		<img src="./assets/images/img2.png" alt="Iphone in Hand" style="float: left;
    width: 422px;
    position: absolute;
    top: 830px;
    left: 66%;">
	</div>
</div>

<div class="vertical50"></div>

<?php
include('productlist.php');
	?>
</div>

<div class="vertical50"></div>

<div id="join">
	<h1>Join Us Today</h1>
	<p>Join us today to get the best deals on all Apple Products.</p>
	<div class="joinform">
		<form action="subscribe.php" name="joinus" onSubmit="return validateForm();" method="POST">
			<input type="text" placeholder="Enter Your Name" name="name"> <br>
			<input type="text" placeholder="Enter Your Email Address" name="email"> <br>
			<button type="submit" class="joinbtn" >Join Now</button>
		</form>
	</div>
	
</div>
<div class="footer">
<p>© All Rights Reserved  Odin 2017 . </p>
</div>

</body>
</html>
