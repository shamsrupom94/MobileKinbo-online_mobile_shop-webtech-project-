<?php

	session_start();
	
	require 'DB.php';
	
	if(isset($_GET['edit_id'])){
		//echo $_GET['edit_id'];
		$productid = $_GET['edit_id'];
		$_SESSION['prid'] = $productid;
		// $sql = "SELECT * FROM Product WHERE Pro_ID = " . $_GET['edit_id'];
		$sql = "SELECT * FROM Product WHERE Pro_ID =".$productid;
		$result = mysqli_query($conn, $sql) or die("error");
		$row = mysqli_fetch_array($result);
		//echo $productid;
		
	}
	//echo $productid;
	if (isset($_POST['btn-update'])) {
		$image = $_FILES['image']['tmp_name'];
		$productname = $_POST['productname'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];
		$details = $_POST['details'];
		$cartid = $_POST['cartid'];
		//$brandid = $_POST['brandid'];

		// $update = "update Product set ProductName='$productname', Price='$price', Stock='$stock', Details='$details', Cart_ID='$cartid', Brand_ID='$brandid', Image='$image' where Pro_ID = " . $_GET['edit_id'];
		//echo $productid;
		if (!empty($productname) && !empty($price) && !empty($stock) && !empty($details) && !empty($cartid) && !empty($image))
		{
			$x = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$update = "UPDATE product SET ProductName ='".$productname."', Price ='".$price."', Stock ='".$stock."', Details ='".$details."', Cart_ID ='".$cartid."', Image ='".$x."' WHERE Pro_ID =".$_SESSION['prid'];
		
		$upresult = mysqli_query($conn, $update);

		if(!$upresult){
			echo mysqli_connect_error($upresult);
			echo $update;
		}else{
			echo $productid;
			header("location: ProductList.php");
		}
		
		//session_unset();
		//session_destroy();
	}else{
		echo "<script>";
		echo "alert('All fields must be filled up.')";
		echo "</script>";
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Product | Mobile Kinbo</title>
	<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">

	<style type="text/css">
		.box
		{   color: white;
			position: absolute;
			top:90%;
			left: 50%;
			width: 450px;
			padding: 40px;
			background: rgba(0,0,0,0.8);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 950px;

		}
		.MainContent
		{
			background-image: url("image/proback.jpg");
		}
		#top
		{
			margin: 0 0 30px;
			position: absolute;
			left:510px;
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
				background: #1BC60A;
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
			#cancel
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
				top: 840px;
			}
			#cancel:hover
			{
				color: #fff;
				background:#E24119;
			}
			#can
			{
				text-decoration: none;
				font-family:  'Barlow Semi Condensed', sans-serif;
				color: #fff;
			}
			
	</style>
</head>
<body class="MainContent">
	 <div class="topbox">
	<a id="refb" href="ProductList.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
     </div>
	<h1 id=top>Enter product Information</h1>
	<div class=box>
	<form method="post" action="Edit.php?edit_id=<?php echo $_SESSION['prid']; ?>" enctype="multipart/form-data">
		<div class="inputbox">
		<label>Product ID </label> <br><br>
		<input type="text" name="productname" placeholder="Type your product name" value="<?php echo $row['Pro_ID']?>" disabled>
		</div>
        <div class="inputbox">
		<label>Product Name</label> <br><br>
		<input type="text" name="productname" placeholder="Type your product name" value="<?php echo $row['ProductName']?>">
		</div>
		<div class="inputbox">
		<label>Price</label> <br><br>
		<input type="text" name="price" placeholder="Product Price?" value="<?php echo $row['Price']?>">
		</div>
		<div class="inputbox">
		<label>Stock</label><br><br>
	
		<input type="text" name="stock" placeholder="Available item" value="<?php echo $row['Stock']?>">
		</div>
		<div class="inputbox">
		<label>Brand Name</label><br><br>
		<input type="text" name="cartid" placeholder="Type your cart id" value="<?php echo $row['Cart_ID']?>">
		</div>
        <div class="inputbox">
		<label>Details</label><br><br>
		<input type="text" name="details" placeholder="Details of your product" value="<?php echo $row['Details']?>">
		</div>
        

		<!-- <div class="inputbox">
		<label>Brand ID</label><br><br>
		<input type="text" name="brandid" placeholder="Type your brand id" value="<?php echo $row['Brand_ID']?>">
		</div> -->
        <div class="inputbox">
		<label>Upload an image</label> 
	    </div><br><br>
		<input type="file" name="image" size="50"/>
		<br><br><br>

		<input type="submit" name="btn-update" id="btn-update" <!-- onclick="update() -->"><strong>Update</strong></input>
		<button type="button" value="button" id=cancel><a id=can href="ProductList.php">Cancel</a></button>
	</form>
</div>
	<!-- Alert for Updating -->
	<script type="text/javascript">
		function update(){
			var x;
			if (confirm("Updated data successfully")==true) {
				x = "update";
			}
		}
	</script>
</body>
</html>