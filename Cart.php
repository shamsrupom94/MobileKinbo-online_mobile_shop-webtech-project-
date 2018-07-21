<!DOCTYPE html>
<html>
<head>
	<title>Index | Welcome to Portal</title>
	<meta charset="utf-8">
	
	<style type="text/css">
	    .box
			{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				width: 400px;
				padding: 40px;
				background: rgba(0,0,0,0.6);
				box-sizing: border-box;
				box-shadow: 0px 15px 25px rgba(0,0,0,0.8);
				border-radius: 10px;
				height: 460px;
			}
		    .box h1
			{
				margin: 0 0 30px;
				padding: 0;
				color: #B430D5;
				font-family: 'Roboto Mono', monospace; 
				font-size: 40px;
			}
			.box p
			{
				margin: 0 0 30px;
				padding: 0;
				color: #fff;
				font-family: 'Times New Roman', monospace; 
				font-size: 20px;
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


	</style>
</head>
<body class="MainContent">
	<div class="box">
	

<?php

?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<h1>Oopps!!</h1>
		<p>It looks like you haven't logged in yet <a id="individual", href="Login.php"> CLICK HERE </a> to Login</p>
		<p>Not a member yet?? <a id="individual", href="Registration.php">CLICK HERE</a> to Register </p>
	
		<p> Go back <a id="individual", href="Home.php">HOME</a> </p>
	</form>
</div>
</body>
</html>