<?php
	session_start();

	$firstName = "";

	if (isset($_SESSION['FirstName'])) {
		$firstName = "Hello! " . $_SESSION['FirstName'];
	}else{
		$x = "";
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
				position: relative;
				left:-80%;
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
			body
			{
				background-image: url("image/productshowback.jpg");

			}
			#adm
			{
				position:absolute;
				top:110%;
				left: 140%;
				color: white;
			}


		#brandcar
		{
			position: absolute;
			top: 120%;
			margin-left: 10px;
			margin-bottom: 60px;
			width: 1325px;
			height: 330px;
			background: rgba(0,0,0,.6);
			
		}
		
			.slide_show
			{
				width: 15%;
				margin: 15px;
			}
			.slides
			{
				display: none;
				position: absolute;
				top:32%;
				left:6%;
				
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
				background: rgba(0,0,0,0.6);
			}
			.dots
			{
				position: absolute;
				top:100%;
				width: 10px;
				height: 10px;
				display: inline-block;
				background:black;
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
			#pro1

			{
			 position: relative;
			 height:300px;
			 width: 310px;
			 top:12px;
			 left:10px;
			 background: rgba(0,0,0,.6);

			}
				#pro2

			{
			 position: absolute;
			 height:280px;
			 width: 310px;
			 left: 330px;
			 top:0px;
			 background: rgba(0,0,0,.6);

			}
				#pro3

			{
			 position: absolute;
			 height:300px;
			 width: 310px;
			 left: 340px;
			 top:0px;
			 background: rgba(0,0,0,.6);

			}
				#pro4

			{
			 position: absolute;
			 height:300px;
			 width: 310px;
			 left: 330px;
			 top:0px;
			 background: rgba(0,0,0,.6);

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
			  left: 45px;
			  width:75%;
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
			  background-color:  #6E00A2;;
			  color: white;
			  font-size: 16px;
			  padding: 12px 70px;

			  border-radius: 2px;
			}
			#tags
			{
				background:#6E00A2;
				position: relative; 
				top:-10%;
				color: #fff;
				font-family: 'Barlow Semi Condensed', sans-serif;
				font-size: 20px;
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
				background: #6E00A2;
				border-color: #6E00A2;
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
		
		#ab
		{
			font-family: 'Barlow Semi Condensed', sans-serif;
			color: white;
			background: #6E00A2;
			position: absolute;
			top:105%;
			font-size: 30px;
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
				<div class="tooltip">
             	<li><a href="check.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
             	 <span class="tooltiptext">Profile</span>
			<!-- 	</div>
				<div class="tooltip">
             	<li><a href="AdminDash.php">A</a></li>
             	 <span class="tooltiptext">Admin Profile</span>
				</div> -->
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
	
    <div  class="slide_show" >
    	<div  class="slides fade">
    		<div><img height=420px width=1220px src="a.jpg"></div>
    	</div>
    	<div class="slides">
    		<div><img height=420px width=1220px src="b.jpg"></div>
    	</div>
    	<div class="slides">
    		<div><img height=420px width=1220px src="c.jpg"></div>
    	</div>
    	 <a class="prev" onclick="plusIndex(-1)">&#10094;</a>
         <a class="next" onclick="plusIndex(+1)">&#10095;</a>
    </div>
     </br>
   <!--  <div style="text-align: center;">
    	<span class="dots" onclick="currentSlide(1)"></span>
    	<span class="dots" onclick="currentSlide(2)"></span>
    	<span class="dots" onclick="currentSlide(3)"></span>
    </div> -->
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
   <h2 id="ab">Products from Top Brands</h2>
   <div id="brandcar">
   	<div id="pro1">

   		<div class="container">
                <img src="image/samsung.jpg"  class="image" width="290" height="290">
               
						<div class="middle">
				<div class="text"><a id="detailsbutton" href="ProductShowSamsung.php?brand_name=Samsung">Samsung</a></div>
			</div>
				
   		
   	</div>
   	<div id="pro2">
   			<div class="container">
                <img src="image/xiaomi.jpg"  class="image" width="290" height="275">
               
						<div class="middle">
				<div class="text"><a id="detailsbutton" href="ProductShowXiaomi.php?brand_name=Apple">Xiaomi</a></div>
			</div>
				


   	</div>
   	<div id="pro3">
   		
   				<div class="container">
                <img src="image/apple.jpg"  class="image" width="290" height="290">
               
						<div class="middle">
				<div class="text"><a id="detailsbutton" href="ProductShowApple.php?brand_name=Apple">Apple</a></div>
			</div>
				

				
   	</div>
   	<div id="pro4">
   		<div class="container">
                <img src="image/htc.jpg"  class="image" width="290" height="290">
               
						<div class="middle">
				<div class="text"><a id="detailsbutton" href="ProductShowHTC.php?brand_name=Apple">HTC</a></div>
			</div>
				
   	</div>
   </div>
   
   

    <a id="adm" href="AdminDash.php">Admin Profile</a>
</body>
</html>