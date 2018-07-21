<!DOCTYPE html>
<html>
<head>
	<title>Index | Welcome to Portal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	
	<style type="text/css">
		.MainContent
		{
		background:url("image/logback.jpg");
		text-align: center;
		margin: 0;
		padding: 0; 	
	    }
	    a
		{
			font-size: 25px;
			position: absolute;
			top:270px;
			left: 50px;
			color: white;
			width: 80px;
			height: 30px;
			border-radius: 10px;
			text-decoration: none;
		}	
	.topbox
		{
			position: absolute;
			top: 8%;
			left: 90%;
			transform: translate(-50%,-50%);
			width: 150px;
			background: rgba(0,0,0,0.8);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 40px;
		}
		.box
			{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				width: 400px;
				padding: 40px;
				background: rgba(0,0,0,0.8); box-sizing: border-box;
				box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
				border-radius: 10px;
				height: 400px;
			}
			.box h2
			{
				margin: 0 0 30px;
				padding: 0;
				color: #B430D5;
				font-family: 'Barlow Semi Condensed', sans-serif; 
				font-size: 40px;
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
			.box input[type="submit"]
			{
				background:transparent;
				border:none;
				outline: none;
				color: #fff;
				background:#B430D5;
				padding: 5px 15px;
				border-radius: 2px;
				width: 320px;
				font-size: 22px;
				font-family: 'Barlow Semi Condensed', sans-serif; 
				cursor: pointer;
				position:absolute;
				right: 40px;

			}
			.box input[type="submit"]:hover
			{
				color: #fff;
				background:#1BC60A;
			}
	</style>
</head>
<body class="MainContent">
		<div class="topbox">
			<a id="refb" href="Home.php"><i class="fa fa-home" aria-hidden="true"></i></a>
			<a id="refa" href="Registration.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
		
	</div>
	<div class="box">
	

<?php

	//session_start();

	//$emailErr = $passwordErr = "";
	$email = $password = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		/*if(empty($_POST['Email']))
		$emailErr = "Email is required.";

		if(empty($_POST['password']))
		$passwordErr = "Password is required.";*/

		if (!empty($_POST['Email']) && !empty($_POST['password'])) {

			require 'DB.php';
			$email = $conn->escape_string($_POST['Email']);
			$result = $conn->query("SELECT * FROM Admin WHERE Email ='$email'");
			$resultCust = $conn->query("SELECT * FROM Customer WHERE Email ='$email'");

			//echo $email;


			if($result->num_rows == 0 && $resultCust->num_rows == 0){
				echo '<script language="javascript">';
				echo 'alert("User does not exist!")';
				echo '</script>';
			}
			else if((!$result->num_rows == 0 || $resultCust->num_rows == 0) || ($result->num_rows == 0 || !$resultCust->num_rows == 0)){
				
				
				//$success=0;

				if ((!$result->num_rows == 0 || $resultCust->num_rows == 0)) {
					$user = $result->fetch_assoc();
					if($_POST['password']==$user['Password'] ){
	 //|| password_verify($_POST['password'], $customer['Password']
					// $usermsg = "Welcome: " . $user['FirstName'];
					// echo '<script language="javascript">';
					// echo 'alert('.'"'.$usermsg.'"'.')';
					// echo '</script>';
					// $success+=1;

					if ($_POST['password']==$user['Password']) {
						session_start();
						$_SESSION['Admin_ID'] = $user['Admin_ID'];
						$_SESSION['FirstName'] = $user['FirstName'];
						$_SESSION['LastName'] = $user['LastName'];
						$_SESSION['Address'] = $user['Address'];
						$_SESSION['Email'] = $user['Email'];
						$_SESSION['Password'] = $user['Password'];
						$_SESSION['Phone'] = $user['Phone'];
						$_SESSION['logged_in'] = true;
						$_SESSION['ImAdmin'] = true;

						header("location: AdminDash.php");
					}
				}
			}else if (($result->num_rows == 0 || !$resultCust->num_rows == 0)) {
					$customer = $resultCust->fetch_assoc();
					if(password_verify($_POST['password'], $customer['Password'])){
						session_start();
						$_SESSION['Cust_ID'] = $customer['Cust_ID'];
						$_SESSION['FirstName'] = $customer['FirstName'];
						$_SESSION['LastName'] = $customer['LastName'];
						$_SESSION['Address'] = $customer['Address'];
						$_SESSION['Email'] = $customer['Email'];
						$_SESSION['Password'] = $customer['Password'];
						$_SESSION['Phone'] = $customer['Phone'];
						$_SESSION['Bank_Acc_ID'] = $customer['Bank_Acc_ID'];
						$_SESSION['logged_in'] = true;
						$_SESSION['ImCustomer'] = true;

						header("location: CustomerDash.php");
					}
				}

				// if($success==1){
				// 	sleep(10);
				// 	header("location: AdminDash.php");
				// 	$success=0;
				// }
			}
		}
	}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h2>Login</h2>
		<div class="inputbox">
		<input type="email" name="Email" required="">
		<label>Email</label>
		<!-- <span class="error"> <?php echo $emailErr;?></span> -->
		<br><br>
		</div>
		<div class="inputbox">
		<input type="password" name="password" required="">
		<label>Password</label>
		<!-- <span class="error"><?php echo $passwordErr;?></span> -->
		<br>
		</div>

		<input type="submit" name="submit" value="Login">


	</form>
</div>
</body>
</html>