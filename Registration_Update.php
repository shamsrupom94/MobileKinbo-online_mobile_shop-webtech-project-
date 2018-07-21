<?php
	require 'DB.php';

	$bal = rand(90000,900000);

	$banksql = "INSERT INTO `bank`(`Password`, `Balance`, `No_of_Transaction`) VALUES ('$password','$bal','0')";

	$banksqlresult = $conn->query($banksql) or die("Failed to add Bank information.");

	$sql3 = "SELECT * from Bank where Balance = ". $bal;

	$sql3result = $conn->query($sql3);


	//if ($banksqlresult->num_rows > 0) {
		$row1 = $sql3result->fetch_assoc();

		$sql = "INSERT INTO `customer`(`FirstName`, `LastName`, `Email`, `Password`, `Address`, `Phone`, `Bank_Acc_ID`) VALUES ('$firstName','$lastName','$email','$password','$address','$phone'," . $row1['Bank_Acc_ID'] .")";

		//echo "$sql";

		// $update = "UPDATE product SET ProductName ='".$productname."', Price ='".$price."', Stock ='".$stock."', Details ='".$details."', Cart_ID ='".$cartid."', Brand_ID ='".$brandid."', Image ='".$image."' WHERE Pro_ID =".$_SESSION['prid'];

		// $customerInfoUpdate = $conn->query($sql);

		// if ($customerInfoUpdate->num_rows > 0) {
			
		// }
	//}
	
	if ($conn->query($sql) === TRUE){
		echo '<script language="javascript">';
		echo 'alert("Information successfully updated.")';
		echo '</script>';
	}else{
		$er = "Error: " . $conn->error;
		echo '<script language="javascript">';
		echo 'alert('.'"'.$er.'"'.')';
		echo '</script>';
	}

	$conn->close();
?>