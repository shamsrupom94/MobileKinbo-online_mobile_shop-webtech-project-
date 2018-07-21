<?php
	require_once 'DB.php';

	$sql = "DELETE FROM `cart` WHERE Cart_ID = " . $_GET['Cart_ID'];

	$result = $conn->query($sql) or die("SQL Error" . mysqli_connect_error());

	if ($result->num_rows == 0) {
		header("location: LoginReminder.php");
	}else{
		header("location: LoginReminder.php");
	}
?>