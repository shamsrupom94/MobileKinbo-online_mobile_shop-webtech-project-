<?php
	
	session_start();

	$_SESSION['CC'] = $_GET['Details_ID'];


	require_once 'DB.php';
	$sql = "SELECT * from Product WHERE Pro_ID = " . $_SESSION['CC'];

	$result = $conn->query($sql) or die("SQL Error: " . mysqli_connect_error($conn));

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_array($result);
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
			
		if(isset($_POST['buttonC'])){
			include 'AddtoCart.php';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobile Kinbo!</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	
	<style>
	@import url('https://fonts.googleapis.com/css?family=Bangers');
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
	
	
		#midsection
		{
			position: absolute;
			top: 30%;
			width: 1330px;
			height: 600px;
			background-color: none;

		}
		
			#srcbtn
			{
				width: 40px;
				padding: 9px;
				border-radius: 25px;
				text-align: center;
				font-size: 15px;
				color: #B430D5;
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
			.box
				{
					position: absolute;
					top: 44%;
					left: 50%;
					transform: translate(-50%,-50%);
					width: 800px;
					padding: 40px;
					background: rgba(0,0,0,0.8);
					box-sizing: border-box;
					box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
					border-radius: 10px;
					height: 540px;
				}
				#displayproduct
				{
					position: relative;
					width: 80%;

					left:10%;
					border-collapse: separate;
                    border-spacing: 10px ;
					border: 1px none white;
				}
				#displayproduct td
				{
					width: 50%;
					height: 100px;
					border: 1px none white ;
				}
				.container {
			    position: relative;
			    width: 100%;
			}

			.image {
			  position: relative;
			  left:100px;
			  opacity: 1;
			  display: block;
			  width: 50%;
			  height: auto;
			  transition: .5s ease;
			  backface-visibility: hidden;
			}
			#ProDetalis
			{
				width: 100%;
				height: 100%;
				border:1px none white;
			}
			#ProDetalis td
			{
				height: 20%;
			}
			.text
			{
				color: #fff;
				font-family: 'Barlow Semi Condensed', sans-serif;
				font-size: 18px;
				text-align: center;
			}
			#nametag
			{
				background-color: #B430D5;
				font-size: 25px;
				font-family: 'Barlow Semi Condensed', sans-serif;
				border-radius: 5px;
				
			}
           #pricetag
           {
           	  font-family: 'Barlow Semi Condensed', sans-serif;
           	  font-size: 23px;
           	  border-radius: 5px;
           }
           #demo
           {
           	border-radius: 1px;
           	background:transparent;
           	text-align: center;
            width: 50px;
            position: relative;
            height: 20px;
            color: white;
            left: 20%;
            font-size: 16px;
           }
           #show
           {
           	position:relative;
           	height: 25px;
           	left:20%;
           	width: 30px;
           	color: green;
           }
           #show2
           {
           	position: relative;
           	left:20%;
           	height: 25px;
           	width: 30px;
           	color:green;
           }
           #cartbutton
           {
           	position: relative;
           	left:38%;
           	height: 29px;
           	width: 180px;
           	color: #fff;
           	background-color: #6E00A2;
           	border-color:  #6E00A2;
           	font-size: 15px;
           	cursor: pointer;
           	font-family: 'Barlow Semi Condensed', sans-serif;
           }
           #cartbutton:hover
           {
           		background: red;
           	border-color: red;

           }

           body
			{
				background-image: url("image/prodet.jpg");

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
		
	</style>
</head>
<body>
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
             </ul>
		</nav>
	</div>
	</div>

	<div id="menu">

		<nav class="mainmenu">
			<ul>
				<li><a class=menutext style="text-decoration:none;" href="Home.php"  class="active">Home</a></li>
				<li><a class=menutext style="text-decoration:none;" href="ProductShow.php"  class="active">Products</a></li>
				<!-- <li><a style="text-decoration:none;" href="#">Category</a> 
					<ul class="submenu">
						<li> <a style="text-decoration:none;" href="#">Mobile</a> </li>
						<li> <a style="text-decoration:none;" href="#">Accessories</a></li>
					</ul>
		        </li> -->
				<!-- <li><a style="text-decoration:none;" href="#">Brands</a>
					<ul class="submenu">
						<li> <a style="text-decoration:none;" href="#">Apple</a> </li>
						<li> <a style="text-decoration:none;" href="#">Samsung</a></li>
						<li> <a style="text-decoration:none;" href="#">Xiaomi</a></li>
						<li> <a style="text-decoration:none;" href="#">One Plus</a></li>
						<li> <a style="text-decoration:none;" href="#">Symphony</a></li>
						<li> <a style="text-decoration:none;" href="#">HTC</a></li>
					</ul>
				</li>
 -->				<li><a class=menutext style="text-decoration:none;" href="Aboutus.php">About Us</a></li>
				<li><a class=menutext style="text-decoration:none;" href="#">Shopping Policy</a></li>
			</ul>
		</nav>
	</div>
	
   
    <div id="midsection">
   	<div class="box">

         <table id="displayproduct">
         	<tr>
         		<td>
         			<div class="container">
                    <!-- <img src="191.png"  class="image" style="width:100%"> -->
                    <?php
							// $image_data = $row['Image'];
							// $encoded_image = base64_encode($image_data); 
							// $i= "<img src = 'data:image/jpeg;base64, {$encoded_image}'></img>";
							// echo $i;
							// header("Content-type: image/jpeg");
							// echo "$row[7]";
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"height=290px width=260px aling=middle />';
							//$image = $row['Image'];
							//header("Content-Type: image/jpeg");
							//echo $image;
					?>
                    </div>
         		</td>
         		<td>
         		<table id="ProDetalis">
         			<tr><td><h3 class="text" id="nametag"> <?php echo $row['ProductName']; ?> </h3></td></tr>
         			<tr><td><h3 class="text" id="pricetag">Price: <?php echo $row['Price']; ?>/-TK </h3></td></tr>
         			<tr><td><p class="text">Brand: <?php echo $row['Cart_ID']; ?></p></td></tr>
         			<tr><td><p class="text">Stock: <?php echo $row['Stock']; ?></p></td></tr>
         			<tr><td><p class="text"><?php echo $row['Details']; ?></p></td></tr>
         			</table>
         	</td>
         	</tr>     	
         </table>
         <br>
         <form method="POST" action = "ProductDetalis.php?Details_ID=<?php echo $_SESSION['CC']; ?>">
         	<p style="color: #fff;position: relative;left: 170px;;">Select Quantity</p>>

         	<button type="button" id="show" onclick="subFunction()"><i class="fa fa-minus" aria-hidden="true"></i></button>
         	 <input type="text" name="quantity" id="demo" value="0"> 
         	<button type="button" id="show2" onclick="addFunction()"><i class="fa fa-plus" aria-hidden="true"></i></button>
			<button type="input" name="buttonC" id="cartbutton">Add to cart <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
         </form>
         <br>
      <script>
      	var counter = 0;

			var add = (function () {
			    
			    return function () {
			    	if (counter>=5) {
			    		alert('Max limit: 5 products at a time.');
			    		return counter = 5;
			    	}else{
			    		return counter += 1;
			    	}
			    }
			})();
			var sub = (function () {
			    
			    return function () {
			    	if (counter>0) {
			    		return counter -= 1;
			    	}else{
			    		alert('Product quantity can not be less than zero!');
			    		return counter = 0;
			    	}
			    }
			})();

			function addFunction(){
			  document.getElementById("demo").value = add();
				}
			function subFunction(){
			 document.getElementById("demo").value =sub();
				}
        </script>

   	</div>
   	
   </div>
 
</body>
</html>