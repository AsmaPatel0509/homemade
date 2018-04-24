<?php
error_reporting(E_ERROR | E_PARSE);
$dbuser="root";
$dbpass="";
$host="localhost";
$db="home_made";
$conn =mysql_connect($host,$dbuser,$dbpass);
mysql_select_db($db,$conn);

if($_POST['s'])
{
	$uname=$_POST['name'];
	$contactno=$_POST['number'];
	$emailid=$_POST['email'];
	$password=$_POST['password'];

	$query="insert into user(name,u_id,email,password) values('$uname','$contactno','$emailid','$password')";
	$s1=mysql_query($query,$conn);
	if($s1)
	{
		echo "<script>alert('successful');</script>";
	}
	else
	{
		echo "<script>alert(mysql_error());</script>";
	}
}

?>
<html>
	<head>
	</head>
	<body style="background-image:url('img/backgrnd2.jpg')"><center>
			<div align="center" style="margin-top:75px;width:350px; height:300px;">
			<b>
			<h1>CUSTOMER REGISTRATION </h1><br><br>
			<form method="post" action=""><h3>
			NAME <input type="text" name="name"/> <br><br><br>
			Email <input type="email" name="email" /> <br><br><br>
			Contact Number <input type="number" name="number" /> <br><br><br>
			Password <input type="password" name="password"/><br><br><br>
			<input type="submit" value="Sign up" name="s" style="font-size:20px;"/><br><br></h3>
			</form>
			<div>
			<a href="index.php"><h2>Go back to main page</h2></a>
			</center></b>
	</body>
</html>