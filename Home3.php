<?php
	session_start();

	$firstName = "";

	if (!isset($_SESSION['ImAdmin'])) {
		$x = "";
	}else if (isset($_SESSION['ImCustomer'])==false) {
		$x = "";
	}else{
		if (isset($_SESSION['FirstName'])) {
			$firstName = "Hello! " . $_SESSION['FirstName'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobile Kinbo!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
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
				color:#B430D5;
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
				color: #B430D5;
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
				width: 1335px;
				height: 120px;
				background-color: rgb(60, 60, 60);

			}
		 #menu
			{
				position: absolute;
				top: 20%;
				width: 1335px;
				height: 45px;
				background-color: white;

			}
		#brandcar
		{
			position: absolute;
			top: 110%;
			width: 1330px;
			height: 340px;
			background-color: #fff;

		}
			#freshpro
		{
			position: absolute;
			top: 165%;
			width: 1330px;
			height: 340px;
			background-color: #fff;

		}

		#bottomsection
		{
			position: absolute;
			top: 220%;
			width: 1330px;
			height: 200px;
			background-color: #fff;

		}
			.slide_show
			{
				width: 20%;
				margin: 20px;
			}
			.slides
			{
				display: none;
			}
			.prev ,.next
			{
				position: absolute;
				top: 60%;
				color: #f2f2f2;
				font-weight: bolder;
				padding:10px 10px;
				font-size: 30px;
				cursor: pointer;
			}
			.next
			{
				right: 0;
			}
			.prev:hover , .next:hover
			{
				background: rgba(0,0,0,0.3);
			}
			.dots
			{
				width: 10px;
				height: 10px;
				display: inline-block;
				background:white;
				padding: 1px;
				border-radius: 50%;

			}
			.dots:hover
			{
				cursor: pointer;
			}
			.fade
			{
				animation-name: fade;
				animation-duration: 0.2s;

			}
			@keyframes fade {
				from{opacity: 0.2}
				to{opacity: 1}
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
				right: 71%;
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
			    background-color: #6E00A2;
			    color: #fff;
			    text-align: center;
			    border-radius: 6px;
			    padding: 5px 0;
			    font-size: 20px;
			    font-family: "Times New Roman", Times, serif;
			    text-orientation: bold;

			    /* Position the tooltip */
			    position: absolute;
			    z-index: 1;
			}

			.tooltip:hover .tooltiptext {
			    visibility: visible;
			}

 

	</style>
</head>
<body style="background-color: rgb(<?php echo(rand(0,255)) ?>,<?php echo(rand(0,255)) ?>,<?php echo(rand(0,255)) ?>);">
	<div id="topsection">
		<div class="Banner"> 
			<img src="logo3.jpg">
		</div>
		<h2>Mobile Kinbo!</h2>
        <div class=searchbar>
			<input id="sb" type="text" name="search_box" placeholder="Search...." maxlength="40">
			<button id="srcbtn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> 
		</div>
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

	<div id="menu">

		<nav class="mainmenu">
			<ul>
				<li><a style="text-decoration:none;" href="Home.php"  class="active">Home</a></li>
				<li><a style="text-decoration:none;" href="ProductShow.php"  class="active">Products</a></li>
				<li><a style="text-decoration:none;" href="#">Category</a> 
					<ul class="submenu">
						<li> <a style="text-decoration:none;" href="#">Mobile</a> </li>
						<li> <a style="text-decoration:none;" href="#">Accessories</a></li>
					</ul>
		        </li>
				<li><a style="text-decoration:none;" href="#">Brands</a>
					<ul class="submenu">
						<li> <a style="text-decoration:none;" href="ProductShowApple.php?brand_name=Apple">Apple</a> </li>
						<li> <a style="text-decoration:none;" href="ProductShowSamsung.php?brand_name=Samsung">Samsung</a></li>
						<li> <a style="text-decoration:none;" href="#">Xiaomi</a></li>
						<li> <a style="text-decoration:none;" href="#">One Plus</a></li>
						<li> <a style="text-decoration:none;" href="#">Symphony</a></li>
						<li> <a style="text-decoration:none;" href="#">HTC</a></li>
					</ul>
				</li>
				<li><a style="text-decoration:none;" href="#">Contact Us</a></li>
				<li><a style="text-decoration:none;" href="#">Shopping Policy</a></li>
				<li><a style="text-decoration:none;" href="#"><?php echo $firstName;?></a></li>
			</ul>
		</nav>
	</div>
	
    <div  class="slide_show" >
    	<div  class="slides fade">
    		<div><img src="a.jpg"></div>
    	</div>
    	<div class="slides">
    		<div><img src="b.jpg"></div>
    	</div>
    	<div class="slides">
    		<div><img src="c.jpg"></div>
    	</div>
    	 <a class="prev" onclick="plusIndex(-1)">&#10094;</a>
         <a class="next" onclick="plusIndex(+1)">&#10095;</a>
    </div>
     </br>
    <div style="text-align: center;">
    	<span class="dots" onclick="currentSlide(1)"></span>
    	<span class="dots" onclick="currentSlide(2)"></span>
    	<span class="dots" onclick="currentSlide(3)"></span>
    </div>
   <script type="text/javascript">
   	var slideIndex =1;

   	showImage(slideIndex);
     function currentSlide(n) 
     {
     	showImage(slideIndex = n);
     }
     function plusIndex(n) 
     {
     	showImage(slideIndex += n);
     }
   	
   	function showImage(n){
   		var slide = document.getElementsByClassName("slides");
   		if(n > slide.length){slideIndex=1};
   		if(n < 1 ) {slideIndex=slide.length};
   		for (var i=0;i<slide.length; i++)
   		{
   			slide[i].style.display="none";
   		};
        slide[slideIndex-1].style.display = "block";
   	}
   	
   </script>
   </div>
   <div id="brandcar">
   	

   </div>
    <div id="freshpro">
   	

   </div>

    <div id="bottomsection">
   	

   </div>
</body>
</html>