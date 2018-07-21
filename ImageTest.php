<?php
	require 'DB.php';

	$sql = "SELECT * FROM `product`";

	$result = $conn->query($sql) or die("SQL Error: " . mysqli_error($conn));
	
	
	$row = $result->mysqli_num_rows();
	
	$image_data = $row[7];
	$encoded_image = base64_encode($image_data);
	//You dont need to decode it again.
	 
	$Hinh = "<img src='data:image/jpeg;base64,{$encoded_image}'>";
	 
	//and you echo $Hinh
	echo $Hinh;
	</img>
	
?>