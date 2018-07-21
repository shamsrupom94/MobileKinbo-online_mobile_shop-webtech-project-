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
					top: 40%;
					left: 50%;
					transform: translate(-50%,-50%);
					width: 800px;
					padding: 40px;
					background: rgba(0,0,0,0.8);
					box-sizing: border-box;
					box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
					border-radius: 10px;
					height: 490px;
				}
				body
			{
				background-image: url("image/aboutback.jpg");

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
			#section1
			{
				position: absolute;
				top: 60%;
				left: 15%;
				transform: translate(-50%,-50%);
				width: 400px;
				padding: 40px;
				background: rgba(0,0,0,0.6);
				box-sizing: border-box;
				box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
				border-radius: 10px;
				height: 490px;
			}
			#section2
			{
				position: absolute;
				top: 60%;
				left:50%;
				transform: translate(-50%,-50%);
				width: 400px;
				padding: 40px;
				background: rgba(0,0,0,0.6);
				box-sizing: border-box;
				box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
				border-radius: 10px;
				height: 490px;
			}
			#section3
			{
				position: absolute;
				top: 60%;
				left:85%;
				transform: translate(-50%,-50%);
				width: 400px;
				padding: 40px;
				background: rgba(0,0,0,0.6);
				box-sizing: border-box;
				box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
				border-radius: 10px;
				height: 490px;
			}
			#shuchi
			{
				position: absolute;
				left:130px;
				top:-5%;
			    box-shadow: 0px 15px 25px rgba(0,0,0,0.6);
				border-radius: 100px;
			}
			#Shams
			{
				position: absolute;
				left:130px;
				top:-5%;
			    box-shadow: 0px 15px 25px rgba(0,0,0,0.6);
				border-radius: 100px;
			}
			#jame
			{
				position: absolute;
				left:130px;
				top:-5%;
			    box-shadow: 0px 15px 25px rgba(0,0,0,0.6);
				border-radius: 100px;
			}
			h4
			{
				font-family: 'Barlow Semi Condensed', sans-serif;
				color: #fff;
				font-size: 35px;
				position: absolute;
				top:-7% ;
				background-color:#6E00A2 ;
				width: 500px;
				text-align: center;
			}
		</style>
	</head>

	body>
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
             	<div class="tooltip">
             		<li><a href="Registration.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
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
				
    			<li><a class=menutext style="text-decoration:none;" href="Aboutus.php">About Us</a></li>
				<li><a class=menutext style="text-decoration:none;" href="#">Shopping Policy</a></li>
			</ul>
		</nav>
	</div>
	
   
    <div id="midsection">
    	<h4>Meet the Team</h4>
   	
      <div id=section1>
       <img id="jame" src="image/jame.jpg" height="150px" width="150px">
    
      </div>
       <div id=section2>
       	
         <img id="shuchi" src="image/shuchi.jpg" height="150px" width="150px">

       </div>
       <div id=section3>
       <img id="Shams" src="image/Shams.jpg" height="150px" width="150px">
       </div>

   	
   </div>
 
</body>
</html>