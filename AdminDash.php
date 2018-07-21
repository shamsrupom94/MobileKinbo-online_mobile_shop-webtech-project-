<?php
	session_start();

	require 'DB.php';

	$sqlp = "SELECT * FROM Admin WHERE Email = ". '"'.$_SESSION['Email'] .'"';

	$resulti = $conn->query($sqlp) or die("SQL Error");

	if ($resulti->num_rows > 0){
		$rowa = $resulti->fetch_assoc();
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['Logout'])){
			$_SESSION['ImAdmin'] = false;
			session_unset();
			session_destroy();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	<style type="text/css">
	
			.MainContent
			{
			background:url("image/adminback.jpg");
			text-align: center;
			margin: 0;
			padding: 0; 	
		    }
			.box
		{
			color: white;
			position: absolute;
			top:65%;
			left: 50%;
			width: 450px;
			padding: 40px;
			background: rgba(0,0,0,0.6);
			box-sizing: border-box;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
			border-radius: 10px;
			height: 700px;
		}
	
		.box h2
		{
			margin: 0 0 30px;
			padding: 0;
			color: #B430D5;
			font-family: 'Barlow Semi Condensed', sans-serif;
			font-size: 30px;
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
			font-family: 'Barlow Semi Condensed', sans-serif;
			text-orientation: bold;
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
			font-family: 'Barlow Semi Condensed', sans-serif;;
			color: #fff;
			pointer-events: none;
			transition: 0.5s;
		}
		#top
		{
			margin: 0 0 30px;
			position: absolute;
			left:565px;
			top:15px;
			padding: 0;
			color: #fff;
			background-color: #B430D5;
			font-family: 'Barlow Semi Condensed', sans-serif;; 
			font-size: 45px;

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
			height: 30px;
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
				color: #B430D5 ;
				background:none;
			}
		
			    #refa
			{
				font-size: 30px;
				position: absolute;
				top: 30%;
				left: 70px;
				width: 75px;
				color: white;
			

			}
			#refa:hover
			{
				color: #B430D5 ;
				background:none:;
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
				width: 370px;
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
			#logout
			{
				color:none;
				background:none;
			}
			#logout:hover
			{
				color: none;
				background: none;
			}
	</style>
</head>
<body class="MainContent">
<div class="topbox">
             <div class="tooltip">
			<a id="refb" href="Product.php"><i class="fa fa-cogs" aria-hidden="true"></i></a>
		</div>
			<button type="submit" id="logout" name = "Logout"><a id="refa" href="Login.php"><i class="fa fa-power-off" aria-hidden="true"></i></a></button>	
		</div>
<h1 id="top" >Admin Profile </h1>
	<div class="box" > 

		<h2> Hi, <?php echo $_SESSION['FirstName']." ".$_SESSION['LastName'];?> </h2>

			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="inputbox">
				First Name 
				<input type="text" name="firstname" value="<?php echo $rowa['FirstName']; ?>">
				</div>
				<div class="inputbox">
				Last Name  <input type="text" name="lastname" value="<?php echo $rowa['LastName']; ?>">
				</div>
				<div class="inputbox">
				Address <input type="text" name="address" value="<?php echo $rowa['Address']; ?>">
				</div>
				<div class="inputbox">
				Email <input type="email" name="emailid" value="<?php echo $rowa['Email']; ?>" disabled>
			    </div>
				<div class="inputbox">
				Password <input type="password" name="adminpassword" value="<?php echo $rowa['Password']; ?>">
				</div>

				<div class="inputbox">
				Phone<input type="text" name="phone" value="<?php echo $rowa['Phone']; ?>">
				</div>
				<input type="submit" name="submit" value="Update"></button>
				
				<br><br>
				
			</form>
			
		</div>
  </body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['Logout'])) {
			if (isset($_SESSION['ImAdmin'])==true) {
				$_SESSION['Admin_ID'] = "";
				$_SESSION['FirstName'] = "";
				$_SESSION['LastName'] = "";
				$_SESSION['Address'] = "";
				$_SESSION['Email'] = "";
				$_SESSION['Password'] = "";
				$_SESSION['Phone'] = "";
				$_SESSION['logged_in'] = false;
				$_SESSION['ImAdmin'] = false;
				session_unset();
				session_destroy();
				header("locaton: Login.php");
			}
			// session_unset();
			// session_destroy();
			
		}
		else if (isset($_POST['submit'])) {

			$emailid =  $_SESSION['Email'];

			$sql = "UPDATE `admin` SET `FirstName`= ".'"'.$_POST['firstname'].'",`LastName`= "'.$_POST['lastname'].'",`Address`="'.$_POST['address'].'",`Password`="' . $_POST['adminpassword'].'",`Phone`="'.$_POST['phone'].'" WHERE Admin_ID = ' . $_SESSION['Admin_ID'];

			$updateResult = $conn->query($sql) or die("SQL Error: " . $conn->connect_error());

			if ($updateResult) {
				echo "<script language='javascript'>";
				echo 'alert("Information successfully updated")';
				echo "</script>";
				//header("location: AdminDash.php");
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=AdminDash.php\">";
			}else{
				echo "<script language='javascript'>";
				echo 'alert("Failed to update.")';
				echo "</script>";
			}

		}
	}
?>