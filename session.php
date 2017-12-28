<?php
session_start();
if(isset($_SESSION["username"])){
	// echo "<script>
	// alert('The Username is:'+".$_SESSION['username'].");
	// </script>";
	echo "The Username is".$_SESSION['username'];
}
else{
	echo "Unauthorized Login";
}

?>