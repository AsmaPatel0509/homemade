<?php
			session_start();
			//Serverdata
			$servername = "localhost";
			$server_username = "root";
			$server_password = "";
			$dbName = "homemade";
			
			
			if(isset($_SESSION['login_session'])){		
				header("location:index.html");//Redirecting to homepage
			}
			//Make Connection
			$conn = new mysqli($servername,$server_username,$server_password,$dbName);
			if($conn)
			{
				//echo nl2br("connection_status = Established \n\r");
			}
			else
			{
				echo nl2br("connection_status = No Connection\n\r");		
			} 
			if($_SERVER["REQUEST_METHOD"] == "POST") 
			{
			
			$u_id=$_POST['u_id'];
			$password=$_POST['password'];
		
      
      $sql = "SELECT * FROM user WHERE u_id = '$u_id' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      
	  if(mysqli_num_rows($result)==1)
	  {
		  $_SESSION['login_session']=$u_id;
		  header("location:index.html");// what user will see after logging in
		  echo "true";
	  }
	  else
	  {
		  $sql = "SELECT * FROM merchant WHERE u_id = '$u_id' and password = '$password'";
		  $result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==1)
			{
				  $_SESSION['login_session']=$email;
				  header("location://write location of page that merchant will see//");// what merchant will see after logging 																											in
				  echo "true";
			}else{
			echo nl2br("<h1 style='color:red'>Email or Password is Incorrect , Please Recheck Credentials. \n</h1>");
			}
		  
	  }
}
	?>
<html>
	<head>
		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
			<h1><a href="index.html">Homemade - Login :<span> Fill Information.</span></a></h1>
			</header>
			
			<br/>
			
	<!-- Form -->
								<section>
									<h3>Login</h3>
									<form method="post" action="login.php">
										<div class="row uniform">
											<div class="6u 12u(3)">
												<input type="text" name="u_id" id="u_id" value="" placeholder="mobile number" />
											</div>
											<div class="6u 12u(3)">
												<input type="password" name="pass" id="password" value="" placeholder="Password" />
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Login" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
		<a href="register.html">Not a member? Register here</a>
		</div>

</body>
</html>