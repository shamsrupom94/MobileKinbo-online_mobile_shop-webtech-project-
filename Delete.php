<?php
	require 'DB.php';
	
	if(isset($_GET['delete_id'])){

		$productid = $_GET['delete_id'];
		
		$sql = "Delete FROM Product WHERE Pro_ID =".$productid;
		$result = mysqli_query($conn, $sql);
		
		if($result){
			header("location: ProductList.php");
		}else{
			echo "Delete hoy nai";
		}
	}
?>