<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	//Serverdata
	$servername = "localhost";
	$server_username = "root";
	$server_password = "";
	$dbName = "home_made";
	
	
	if(isset($_SESSION['login_session'])){		
		echo "alert('session set')";
		header("location:index.php");//Redirecting to homepage
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
	if($_POST['submit']) 
	{
	
		$u_id=$_POST['u_id'];
		$password=$_POST['password'];
		
      
      $sql = "SELECT * FROM user WHERE u_id = '$u_id' and password = '$password'";
-      $result = mysqli_query($conn,$sql);
      
	  if(mysqli_num_rows($result)==1)
	  {
		  $_SESSION['login_session']=$u_id;
		  echo "alert('set')";
		  header("location:index.php");// what user will see after logging in
		  echo "true";
	  }
	  /*else
	  {
		  $sql = "SELECT * FROM merchant WHERE m_id = '$m_id' and password = '$password'";
		  $result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==1)
			{
				  $_SESSION['login_session']=$u_id;
				  header("location://write location of page that merchant will see//");// what merchant will see after logging 																											in
				  echo "true";
			}else{
			echo nl2br("<h1 style='color:red'>Email or Password is Incorrect , Please Recheck Credentials. \n</h1>");
			}
		  
	  }*/
	}
	?>
<html>
	<head>
		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
	</head>
	<body>
		<?php include('header.html');?>
		<style><?php include 'index.css'; ?></style>
		<!-- Header -->
			<!--<header id="header" class="skel-layers-fixed">-->
			<h1>Homemade - Login :<span> Fill Information.</span></h1>
			<!--</header>-->
			
			<br/>
			
	<!-- Form -->
								<section>
									<h3>Login</h3>
									<form method="post" >
										<div class="row uniform">
											<div class="6u 12u(3)">
												<input type="text" name="u_id" id="u_id" value="" placeholder="mobile number" />
											</div>
											<div class="6u 12u(3)">
												<input type="password" name="password" id="password" value="" placeholder="Password" />
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" name="submit" value="Login" /></li>
													<li><input type="reset" name="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
		<a href="userRegister.php">Not a member? Register here</a>
		</div>

</body>
</html>