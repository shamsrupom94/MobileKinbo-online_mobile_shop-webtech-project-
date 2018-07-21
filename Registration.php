<?php
	$fname = $emailErr = $addressErr = $passwordErr = "";
	$firstName = $lastName = $email = $address = $password = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["firstName"])){
			$fname = "First name is required.";
		}if(empty($_POST["email"])){
			$emailErr = "Email is required.";
		}if(empty($_POST["password"])){
			$passwordErr = "Password is required.";
		}if(empty($_POST["address"])){
			$addressErr = "Address is required.";
		}else
		{
			$firstName = test_input($_POST["firstName"]);
			$lastName = test_input($_POST["lastName"]);
			$email = test_input($_POST["email"]);
			require 'DB.php';
			$password = $conn->escape_string(password_hash($_POST["password"], PASSWORD_BCRYPT));
			$address = test_input($_POST["address"]);
			$phone = $_POST['phone'];
		}

		if (!empty($_POST["firstName"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["address"])) {
			require 'Registration_Update.php';
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration | Shoping</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	<style type="text/css">
		.box
		{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 500px;
			padding: 40px;
			background: rgba(0,0,0,0.8);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 770px;
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
		.MainContent
		{
			background-image: url("image/regback.jpg");
			background-repeat: repeat-y;


		}
		#warning
		{
			color: #E24119;
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
				color: #B430D5;
			    background : none;
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
				color: #B430D5;
			    background:none;
				
			}
			a
			{
				font-size: 35px;
				position: absolute;
				left: 50px;
				color: white;
				width: 45px;
				border-radius: 10px;
				
			}
			a:hover
			{
				color: #B430D5;
				
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
				width: 425px;
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
			.box .inputbox input:focus ~ label,
			.box .inputbox input:valid ~ label
			{

				top:-35px;
				left: 0;
				color: #B430D5;
				font-size: 14px;
			}



	</style>
</head>

<body class="MainContent">
	<div class="topbox">
			<a id="refb" href="Home.php"><i class="fa fa-home" aria-hidden="true"></i></a>
			<a id="refa" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
		
	</div>
	<div class="box">
        
	<form method="post">
        <h2>Registration</h2>
       <h3 id="warning"> * please enter all fields to register </h3><br>
        <div class="inputbox">
			<input type="text" name="firstName" required="">
			<label>First Name</label>
			<span class="error"><?php echo $fname;?></span>
			<br><br>
		</div>

		<div class="inputbox">
			<input type="text" name="lastName" required="">
			<label>Last Name</label>
			<span class="error"><?php echo $fname;?></span>
			<br><br>
		</div>

		<div class="inputbox">
			<input type="email" name="email" required="">
			<label>Email</label>
			<span class="error"><?php echo $emailErr;?></span>
			<br><br>
		</div>

		<div class="inputbox">
			<input type="password" name="password" required="" maxlength="10">
			<label>Password</label>
			<span class="error"><?php echo $passwordErr;?></span>
			<br><br>
	    </div>

	    <div class="inputbox">
			<input type="text" name="address" required="">
			<label>Address</label>
			<span class="error"><?php echo $addressErr;?></span>
			<br><br>
		</div>

		<div class="inputbox">
			<input type="text" name="phone" required="">
			<label>Phone</label>
			<!-- <span class="error"><?php echo $addressErr;?></span> -->
			<br><br>
		</div>

	 		<!-- <label id="Address" >Address</label>
			<input type="radio" name="address" value="female"><label id="word">Female</label>
			<input type="radio" name="address" value="male"><label id="word">Male</label>
			<span class="error"><?php echo $addressErr;?></span>
			<br><br><br> -->

		<input type="submit" name="submit" value="Register">  
	</form>
</div>
</body>
</html>