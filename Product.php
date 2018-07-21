<!DOCTYPE html>
<html>
<head>
	<title>Product | MobileKinbo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	

	<style type="text/css">
		.box
		{   color: white;
			position: absolute;
			top:72%;
			left: 50%;
			width: 450px;
			padding: 40px;
			background: rgba(0,0,0,0.8);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 750px;

		}
		.MainContent
		{
			background-image: url("image/proback.jpg");
		}
		#top
		{
			margin: 0 0 30px;
			position: absolute;
			left:565px;
			top:40px;
			padding: 0;
			color: #fff;
			background: #B430D5;
			font-family: 'Barlow Semi Condensed', sans-serif;
			font-size: 35px;

		}
		.box .inputbox
		{
			position: relative;
		}
		.box .inputbox input
		{
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			font-family: courier;
			color: #fff;
			border:1px solid #fff;
			outline: none;
			margin-bottom: 30px;
			background:transparent;
		}
		
		.topbox
		{
			position: absolute;
			top: 10%;
			left: 90%;
			transform: translate(-50%,-50%);
			width: 150px;
			
			background: rgba(0,0,0,0.5);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 40px;
		}
		#refb
			{
				font-size: 20px;
				position: absolute;
				top:30%;
				left: 5px;
				width: 75px;
				text-decoration: none;
				color: white;
				

			}
				#refb:hover
			{
				color:#B430D5;
				background:none;
			}
		
			    #refa
			{
				font-size: 20px;
				position: absolute;
				top: 30%;
				left: 70px;
				width: 75px;
				color: white;
			

			}
			#refa:hover
			{
				color: #B430D5 ;
				background:none;
			}
			.box input[type="submit"]:hover
			{
				color: #fff;
				background: #E24119;
			}
			.box input[type="submit"]
			{
				background:transparent;
				border:none;
				outline: none;
				color: #fff;
				background:#B430D5;
				padding: 5px 15px;
				border-radius: 2px;
				width: 375px;
				font-size: 25px;
				font-family: 'Barlow Semi Condensed', sans-serif;
				cursor: pointer;
				position: absolute;
				right: 38px;

			}
			.box h2
			{
				margin: 0 0 30px;
				padding: 0;
				color: #B430D5;
				font-family: 'Barlow Semi Condensed', sans-serif; 
				font-size: 40px;
			}

			.box .inputbox
			{
				position: relative;
			}
			.box .inputbox input
			{
				width: 100%;
				padding: 10px 0;
				font-size: 16px;
				font-family: courier;
				color: #fff;
				border:1px solid #fff;
				outline: none;
				margin-bottom: 30px;
				background:transparent;
			}
			.box .inputbox label
			{

				position: absolute;
				top: 0;
				left: 0;
				padding: 10px 0;
				font-size: 18px;
				font-family: 'Barlow Semi Condensed', sans-serif; 
				color: #fff;
				pointer-events: none;
				transition: 0.5s;
			}

			


	</style>
</head>
<body class="MainContent" >
	 <div class="topbox">
	<a id="refa" href="ProductList.php"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
	<a id="refb" href="AdminDash.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
     </div>

	<?php
		session_start();

		require 'DB.php';

		if($_SERVER['REQUEST_METHOD']=="POST"){

			// if (empty($_FILES['image']['tmp_name'])) {
			// 	echo "<script>";
			// 	echo "alert('Please select an image')";
			// 	echo "</script>";
			// }else{
				// $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			// }
			
			$productname = $_POST['productname'];
			$price = $_POST['price'];
			$stock = $_POST['stock'];
			$details = $_POST['details'];
			$cartid = $_POST['cartid'];
			// $brandid = $_POST['brandid'];
			$brandid = "Samsung";

			if(!empty($productname) && !empty($price) && !empty($stock) && !empty($details) && !empty($cartid) && !empty($_FILES['image']['tmp_name'])){
				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

				$sql1 = "SELECT `ProductName` FROM `product` WHERE `ProductName` = '$productname'";

				$result1 = $conn->query($sql1) or die("SQL Error: " . mysqli_error($conn));

				if($result1){
					$dbproductname = $result1->fetch_assoc();

					if($dbproductname['ProductName']==$productname){
						echo "<script language='javascript'>";
						echo 'alert("Product already inserted!")';
						echo "</script>";
					}else{
						$brandsql = "INSERT INTO `brands`(`BrandName`, `Details`) VALUES ('$brandid','$details')";

						$count = $conn->query($brandsql);// or die("SQL Error of Brand to update!" );

						// if($count->num_rows == 0){
						// 	echo "ProductList not updated!";
						// }else{
							$getBrandInfoSql = "SELECT * FROM Brands WHERE BrandName = '$brandid'";
							$getBrandInfoSqlResult = $conn->query($getBrandInfoSql);// or die("SQL Error: Not find data in Brand!");

							//if($getBrandInfoSqlResult->num_rows>0){

								$finalResult = $getBrandInfoSqlResult->fetch_assoc();
								$x = $finalResult['Brand_ID'];
								$_SESSION['x'] = $x;
							//}
						}

						$sql2 = "INSERT INTO `product`(`Pro_ID`, `ProductName`, `Price`, `Stock`, `Details`, `Cart_ID`, `Brand_ID`, `Image`) VALUES ('','".$productname."','".$price."','".$stock."','".$details."','".$cartid."',".$_SESSION['x'].",'$image')";

						$result2=$conn->query($sql2);

							if($result2){
								echo "<script language='javascript'>";
								echo 'alert("Information successfully updated")';
								echo "</script>";
								//session_unset();
								//session_destroy();
							}
					}
				}else{
					echo "<script>";
					echo "alert('All fields must be selected!')";
					echo "</script>";
				}
			}
		//}
	?>

    
	<h1 id=top>Add New Product</h1>
	<div class=box>
		
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
		<div class="inputbox">
		<label>Product Name </label> <br><br>
		<input type="text" name="productname" placeholder="Type your product name">
		</div>
		<div class="inputbox">
		<label>Price</label> <br><br>
		<input type="text" name="price" placeholder="Product Price?">
		</div>
        <div class="inputbox">
		<label>Stock</label><br><br>
		<input type="text" name="stock" placeholder="Available item">
		</div>
		<div class="inputbox">
		<label>Brand Name</label><br><br>
		<input type="text" name="cartid" placeholder="Type your cart id">
		</div>
        <div class="inputbox">
		<label>Details</label><br><br>
		<input type="text" name="details" placeholder="Details of your product">
		</div>
        
        <!-- <div class="inputbox">
		<label>Brand ID</label><br><br>
		<input type="text" name="brandid" placeholder="Type your brand id">
		</div> -->

        <div class="inputbox">
		<label>Upload an image</label> 
	    </div><br><br>
		<input type="file" name="image"/>
		<br><br><br>

		<input type="submit" name="submit" value="Insert"><br><br>


	</form>
</div>
</body>
</html>