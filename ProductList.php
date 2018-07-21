<?php
	require_once 'DB.php';

	$sql = "SELECT * FROM `product`";

	$result = $conn->query($sql) or die("SQL Error: " . mysqli_error($conn));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List | MobileKinbo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
<style type="text/css">
	.box
		{   color: white;
			position: absolute;
			top:60%;
			left: 50%;
			width: 950px;
			padding: 40px;
			background: none;
			box-sizing: border-box;
			box-shadow:none;
			border-radius: 10px;
			height: 650px;

		}
		.MainContent
		{
			background-image: url("image/proback.jpg");
			font-family: 'Barlow Semi Condensed', sans-serif;
		}
		#top
		{
			margin: 0 0 30px;
			position: absolute;
			left:550px;
			top:40px;
			padding: 0;
			color: #fff;
			background: #B430D5;
			font-family: 'Barlow Semi Condensed', sans-serif;
			font-size: 35px;

		}
		.topbox
		{
			position: absolute;
			top: 10%;
			left: 90%;
			transform: translate(-50%,-50%);
			width: 80px;
			
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
			#edit
			{
				text-decoration: none;
				font-size: 25px;
				color: #1BC60A;
			}
			#delete
			{
				text-decoration: none;
				font-size: 25px;
				color: red;

			}
			#lsitofproduct
			{
				background: rgba(0,0,0,0.8);
			}

</style>	

</head>
<body>
	<div class= "MainContent">
	<h1 id=top>Product Details</h1>
	 <div class="topbox">
	<a id="refb" href="Product.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
     </div>

    <div class=box>
	

	<table id="listofproduct" border="1" align="center" style="line-height: 25px;background: rgba(0,0,0,0.8);">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Details</th>
			<th>Brand Name</th>
			<th>Brand ID</th>
			<th>Image</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo $row['Pro_ID'];?></td>
						<td><?php echo $row['ProductName'];?></td>
						<td><?php echo $row['Price']; ?></td>
						<td><?php echo $row['Stock']; ?></td>
						<td><?php echo $row['Details']; ?></td>
						<td><?php echo $row['Cart_ID']; ?></td>
						<td><?php echo $row['Brand_ID']; ?></td>
						<td style="max-width: 10%; min-width: 10%; min-height: 10%; max-height: 10%;">
						<?php
							$image_data = $row['Image'];
							$encoded_image = base64_encode($image_data); 
							$i= "<img src = 'data:image/jpeg;base64, {$encoded_image}' height = 150px width = 120px;></img>";
							echo $i;
							// header("Content-type: image/jpeg");
							// echo "$row[7]";
						?>
						</td>
						<!-- <img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /> -->
						<td><a id=edit href="Edit.php?edit_id=<?php echo $row['Pro_ID'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a></td>
						<td><a id=delete href="Delete.php?delete_id=<?php echo $row['Pro_ID'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
					</tr>
					<?php
				}
			}else{
				?>
					<tr>
						<th colspan="2">There's no data found!!</th>
					</tr>

				<?php
			}
		?>
	</table>
</div>
</div>
</body>
</html>