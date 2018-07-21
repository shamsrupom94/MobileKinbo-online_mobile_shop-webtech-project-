<?php
	$servername = "localhost";
	$cusername = "root";
	$cpassword = "";
	$dbname = "mobilekinbo";

	$conn = new mysqli($servername, $cusername, $cpassword, $dbname) or die("Connection failed: ". mysqli_connect_error());
?>