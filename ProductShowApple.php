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
			#protable
			{
				 border: 1px;
                 padding: 8px;
                 width: 900px;
                 position: absolute;
			     top: 25%;
			     left:17%;
			       border-collapse: separate;
                   border-spacing: 20px 50px;
                   background-image: url("image/tableback.jpg");


			}
			#protable td
			{
				border:1px ;
				border-radius: 5px;
				height: 350px;
				width: 200px;
				padding: 10px 0;
				background-color:  rgba(0, 0, 0, 0.6);
				
			}
			.container {
			    position: relative;
                border-radius: 5px;
			    width: 100%;
			}

			.image {
			  position: relative;
			  opacity: 1;
			  display: inline-table;
			  left: 100px;
			  width:60%;
			  transition: 1s ease;
			  backface-visibility: hidden;
			  border-radius: 5px;

			}

			.middle {
			  transition: .5s ease;
			  opacity: 0;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  -ms-transform: translate(-50%, -50%)
			}

			.container:hover .image {
			  opacity: 0.1;
			}

			.container:hover .middle {
			  opacity: 1;
			}

			.text {
			  background-color:  #B430D5;;
			  color: white;
			  font-size: 16px;
			  padding: 12px 70px;

			  border-radius: 2px;
			}
			#tags
			{
				background:#B430D5; 
				color: #fff;
				font-family: 'Barlow Semi Condensed', sans-serif;
				font-size: 35px;
				text-align: center;
			}
			#price
			{
				font-family: 'Barlow Semi Condensed', sans-serif;
				background: #1BC60A;
				color: #fff;
				font-size: 25px;
				text-align: center;
			}
			#detailsbutton
			{
				font-family: 'Barlow Semi Condensed', sans-serif;
				font-size: 20px;

				color: #fff;
				text-decoration: none;
			}
			#detailbutt
			{
				position: relative;
				left:80px;
				height: 40px;
				width: 280px;
				background: #B430D5;
				border-color: #B430D5;
				cursor: pointer;
				font-size: 20px;
				font-family: 'Barlow Semi Condensed', sans-serif;
				color:white;			
			}
			#detailbutt:hover
			{  
                background-color:red;
                border-color: red;
			}
			body
			{
				background-image: url("image/productshowback.jpg");

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
<body >
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
	
   
   
   	
   	<table id="protable">
   		<col width="50%">

   		<?php
			require_once 'DB.php';
			$sql = "SELECT * from Product WHERE Cart_ID = 'Apple'";
			$result = $conn->query($sql) or die("SQL Error: " . connect_error($conn));

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
						
		?>

   		<tr>
   			<td>
   				<div class="container">
                <!-- <img src="191.png"  class="image" style="width:20%"> -->
                <?php
							$image_data = $row['Image'];
							$encoded_image = base64_encode($image_data); 
							$i= "<img src = 'data:image/JPG;base64, {$encoded_image}' class='image' height=320px width=230px></img>";
							echo $i;
							// header("Content-type: image/jpeg");
							// echo "$row[7]";
						?>
						<div class="middle">
				<div class="text"><a id="detailsbutton" href="ProductDetalis.php?Details_ID=<?php echo $row['Pro_ID']; ?>">Details</a></div>
				</div>
			    </div>
			</td>
			<td>
                <h4 id="tags"> <p><?php echo  $row['ProductName']; ?> </p></h4>
                <h3 id="price"> <p><?php echo "Price: " . $row['Price'] . "/- TK"; ?> </p></h3>
				<a id="detailsbutton" href="ProductDetalis.php?Details_ID=<?php echo $row['Pro_ID']; ?>"><button type="button" id=detailbutt>Details</button></a>

   			</td>
   		</tr>
   		<?php
   			}
   		}
   		?>

   			<!-- <td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>

   			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   		</tr>
   		<tr>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   			<td><div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
			</td>
   			<td><div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   		</tr>
   		<tr>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   			<td>
   				<div class="container">
                <img src="191.png"  class="image" style="width:100%">
                <h4 id="tags">Samsung Galaxy Shit </h4>
                <h3 id="price"> Price: 12,000/- </h3>
				<div class="middle">
				<div class="text"><a id="detailsbutton" href="#"> Details</a></div>
				</div>
			    </div>
   			</td>
   		</tr> -->

   		
   	</table>

  

    
</body>
</html>