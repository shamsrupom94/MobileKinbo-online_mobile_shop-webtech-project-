<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index | Welcome to Portal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Bangers');
	
	.MainContent{
		text-align: none;
		min-height: 50%;
		max-height: 100%;
		min-width: 50%;
		max-width: 100%;
		background-image: url("image/productshowback.jpg");
	}
	#cartable
	{
		background:rgba(0,0,0,.6);
		color: white;
		font-family: 'Barlow Semi Condensed', sans-serif;
		font-size: 20px;

	}
    .Banner img
			{
			   position: absolute;
			   margin: 5px;
			   left: 3%;
			   border-radius: 15px;
			}
		#signlog ul li a
			{
				border-radius: 15px;
				background-color: white;
				color:#6E00A2;
			}
		#signlog ul li a:hover
			{
				color: white;
				background-color: #6E00A2;
				border-radius: 25px;
				box-shadow: 0px 0px 15px rgba(0,0,0,.8);
			}
		#social ul li a
			{
				color: #6E00A2;
				background-color: white;
				border-radius: 15px;
			}
		#social ul li a:hover
			{
				color: white;
				background-color: #6E00A2;
				border-radius: 25px;
				box-shadow: 0px 0px 15px rgba(0,0,0,.8);
			}
	     #topsection
			{
				position: absolute;
				top:2%;
				width: 1335px;
				height: 110px;
				background-color: #6E00A2;

			}
		 #menu
			{
				position: absolute;
				top: 20%;
				width: 1335px;
				height: 40px;
				padding-bottom: 5px;
				background-color: white;
				font-family: 'Barlow Semi Condensed', sans-serif;
		}
			
			#srcbtn
			{
				width: 40px;
				padding: 9px;
				border-radius: 25px;
				text-align: center;
				font-size: 15px;
				color: #6E00A2;
				background-color: white;

			}
			#srcbtn:hover
			{
				color: white;
				background-color: #6E00A2;
				box-shadow: 0px 0px 15px rgba(0,0,0,.8);
			}
			#sb
			{
				font-size: 18px;
				border: none;
				border-radius: 50px;
				padding-right: 60px;
			}
			h2
			{
				font-family: sans-serif;
				color: white;
				position: absolute;
				right: 75%;
				top: 1%;
				font-family: bangers;
				font-size: 42px;
			}
			.tooltip {
			    position: relative;
			    display: inline;
			    border-bottom: .5px ;
			}

			.tooltip .tooltiptext {
			    visibility: hidden;
			    width: 120px;
			    background-color: #B430D5;
			    color: #fff;
			    text-align: center;
			    border-radius: 6px;
			    padding: 5px 0;
			    font-size: 20px;
			    font-family: 'Barlow Semi Condensed', sans-serif;
			    text-orientation: bold;

			    /* Position the tooltip */
			    position: absolute;
			    z-index: 1;
			}

			.tooltip:hover .tooltiptext {
			    visibility: visible;
			}
				.mainmenu
			{
				font-family: 'Barlow Semi Condensed', sans-serif;
				color: black;
			}
			.menutext
			{
				font-family: 'Barlow Semi Condensed', sans-serif;
				text-orientation: bold;
				font-size: 22px;
			}
			.menutext:hover
			{
				color: white;
			}
			.searchbar
			{
				position: relative;
				top:32%;
			}
			.topstuffs
			{
				position: relative;
				top:30px;
			}
			#bottomsection
			{
				position: absolute;
				top: 30%;
			}
	#individual
	{ 
		font-family: 'Times New Roman', monospace;
		color: #fff;
		font-size: 20px;
		text-decoration: none;


	}
	#individual:hover
	{
		color: #B430D5;
        
	}
	#rr{
		text-decoration: none;
	}
	h1, #rr{
		background: black;
		margin: auto;
		margin-top: -10px;
		margin-left: -10px;
		margin-right: -10px;
		color: white;
		border-bottom: 5px solid #e3e3e3;
	}
	.a
	{
		font-size: 27px;
	}
	#tick
	{
		color: #D53708;
	}
	#tick:visited
	{
		color: #1BC60A;
	}	
</style>

</head>
<body class="MainContent">

<div id="topsection">
		<div class="Banner"> 
			<!-- <img src="logo3.jpg"> -->
		</div>
		<a href="Home.php"><h2>Mobile-Kinbo.com</h2></a>
        <div class=searchbar>
			<input id="sb" type="text" name="search_box" placeholder="Search...." maxlength="40">
			<button id="srcbtn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> 
		</div>
		<div class="topstuffs">
		<nav id="social">
		<ul>
			
			<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
			<li><a href="https://www.youtube.com/"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>

		</ul>
		</nav>
		<nav id=signlog>
             <ul>
             	<div class="tooltip"><li><a href="Registration.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
				  <span class="tooltiptext">Sign-up</span>
				</div>
				   <div class="tooltip">          	
             	<li><a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
             	  <span class="tooltiptext">Login</span>
				</div>
				<div class="tooltip">
             	<li><a href="LoginReminder.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a></li>
             	 <span class="tooltiptext">Go to Cart</span>
				</div>
				<div class="tooltip">
             	<li><a href="check.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
             	 <span class="tooltiptext">Profile</span>
				</div>
             </ul>
		</nav>
	</div>
	</div>

	<div id="menu">

		<nav class="mainmenu">
			<ul>
				<li><a class=menutext style="text-decoration:none;" href="Home.php"  class="active">Home</a></li>
				<li><a class=menutext style="text-decoration:none;" href="ProductShow.php"  class="active">Products</a></li>
				
				<!-- <li><a style="text-decoration:none;" href="#">Brands</a>
					<ul class="submenu">
						<li> <a style="text-decoration:none;" href="ProductShowApple.php?brand_name=Apple">Apple</a> </li>
						<li> <a style="text-decoration:none;" href="ProductShowSamsung.php?brand_name=Samsung">Samsung</a></li>
						<li> <a style="text-decoration:none;" href="#">Xiaomi</a></li>
						<li> <a style="text-decoration:none;" href="#">One Plus</a></li>
						<li> <a style="text-decoration:none;" href="#">Symphony</a></li>
						<li> <a style="text-decoration:none;" href="#">HTC</a></li>
					</ul>
				</li> -->



			<li><a class=menutext style="text-decoration:none;" href="Aboutus.php">About Us</a></li>
				<li><a class=menutext style="text-decoration:none;" href="#">Shopping Policy</a></li>
			</ul>
		</nav>
	</div>

	<div id="bottomsection">
	<h1>Cart Information</h1>
	
	<br><br>
	<?php
		//session_start();

		if (!isset($_SESSION['logged_in'])) {
			echo "<h>Please Log in to see cart</h><br>";
			echo "<p>We will redirect to Log in page with in 5 seconds<p>";
			echo "<meta http-equiv=".'"Refresh"'. 'content = '.'"5;url=Login.php"'.'">';
		}//else if (isset($_SESSION['ImAdmin'])==false) {
		// 	echo "<h>No Admin Panel is here</h><br>";
		// 	echo "<p>We will redirect to Log in page with in 5 seconds<p>";
		// 	echo "<meta http-equiv=".'"Refresh"'. 'content = '.'"5;url=Login.php"'.'">';
		// }
		else{
			require_once 'DB.php';

			$sql = "SELECT * FROM Cart WHERE Cust_ID = " . $_SESSION['Cust_ID'];
			$result = $conn->query($sql) or die("SQL Error: " . mysqli_connect_error($conn));
			
			

			if($result->num_rows == 0){
				echo "<script>";
				echo "alert('Failed to load Cart information! or No data found.')";
				echo "</script>";
				echo "<p>Buy some product here: <a href='ProductShow.php'>Go to product page</a><br>We will redirect to Home page with in 5 seconds<p>";
				echo "<meta http-equiv=".'"Refresh"'. 'content = '.'"5;url=Home.php"'.'">';
			}else{
				$totalPrice = "0";
				$quantity = "0";
				$row4="";
				?>
			<table id="cartable"border="1" align="center" style="line-height: 25px;">
					<tr>
						<!-- <th>Cart ID</th> -->
						<!-- <th>Customer ID</th> -->
						<th class="a">Product ID</th>
						<th class="a">Product Name</th>
						<th class="a">Base Price</th>
						<th class="a">Quantity</th>
						<th class="a">Total Price</th>
						<th class="a">Date</th>
						<th class="a">Confirm To Cart</th>
						<th class="a">Delete From Cart</th>
						<th class="a">Confirmed</th>
					
					</tr>
				<?php
					$totalPriceSql = "SELECT * FROM Cart WHERE Cust_ID = " .'"'. $_SESSION['Cust_ID'] .'"'. 'and Status = ' . '"Yes"';
					$totalPriceSqlResult = $conn->query($totalPriceSql);
					while ($row3 = $totalPriceSqlResult->fetch_assoc()){
						$totalPrice+= $row3['TotalPrice'];
					}

					
				while ($row = $result->fetch_assoc()) {
					$sqlProduct = "SELECT * FROM Product WHERE Pro_ID = " . $row['ProductList'];
					$sqlProductResult = $conn->query($sqlProduct);
					$row2 = $sqlProductResult->fetch_assoc();
					?>
					<tr>
						<!-- <th><?php echo $row['Cart_ID'];?></th> -->
						<!-- <th><?php echo $row['Cust_ID'];?></th> -->
						<th><?php echo $row['ProductList'];?></th>
						<th><?php echo $row2['ProductName']; ?></th>
						<th><?php echo $row2['Price']; ?> </th>
						<th><?php echo $row['Quantity']; ?></th>
						<th><?php echo $row['TotalPrice'];?></th>
						<th><?php echo $row['Date'];?></th>
						
						<th>
							<a id="tick" href="cartConfirm.php?Cart_ID=<?php echo $row['Cart_ID']; ?>"><i class="fa fa-check" aria-hidden="true"></i>
</a>
						</th>
						<th>
							<a style="color: red;" href="cartDelete.php?Cart_ID=<?php echo $row['Cart_ID']; ?>"><i class="fa fa-times" aria-hidden="true"></i>
</a>
						</th>
						<th><?php echo $row['Status'];?></th>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<th>Total confirmed product price: </th>
					<?php
						for ($i=0; $i<=2 ; $i++) { 
							echo "<th></th>";
						}
					?>
					<th><?php echo $totalPrice; ?></th>
				</tr>
			</table>
				<?php
			}
		}
	?>
</div>
</body>
</html>