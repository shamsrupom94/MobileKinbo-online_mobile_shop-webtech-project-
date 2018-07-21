<?php

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		if(isset($_POST['buttonC'])){
			$x = $_POST['quantity'] * $row['Price'];
			
			if(!$_SESSION['logged_in']){
				echo "<script>";
				echo "alert('Please log in first!')";
				echo "</script>";
			}else{
				$cartSql = "INSERT INTO `cart`(`Cust_ID`, `ProductList`, `TotalPrice`, `Date`, `Status`, `Quantity`) VALUES (".'"'.$_SESSION['Cust_ID'].'","'.$row['Pro_ID'].'","'.$x.'","'. date("Y/m/d").'","'.'No'.'","'.$_POST['quantity'].'")';
				
				echo "<script>";
				echo "alert('Product has been added to the cart.')";
				echo "</script>";

				$cartSqlResult = $conn->query($cartSql);
			}
		}
	}
?>