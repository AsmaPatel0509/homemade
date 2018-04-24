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
	$address=$_POST['address'];
	$products=$_POST['product'];
	
	$str="";
	foreach($products as $x)
	{
		$str=$str." ".$x;
	}
	$query="insert into merchant(name,m_id,address,email,products,password) values('$uname','$contactno','$address','$emailid','$str','$password')";
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
	<body style="background-image:url('img/backgrnd2.jpg')"> <center>
	
		<h1> 	MERCHANT REGISTRATION </h1>
			<div align="center" style="margin-top:0px; width:350px; height:600px;">
		 <br><br>
			<form method="post" action="">
				<h3>
				<div style="height:30px;width:250px;">
				NAME <input type="text" name="name" size="20"/>  </div> <br>
				<div style="height:30px;width:250px;">
				Email <input type="email" name="email" /> </div><br>
				<div style="height:30px;width:331px;">
				Contact Number <input type="text" name="number" /> </div><br>
				<div style="height:30px;width:331px;">
				Password <input type="text" name="password"/></div><br>
				<div style="height:60px;width:250px;">
				Address <textarea cols="10" rows="2" name="address"> </textarea> </div><br>
				<div style="height:30px;width:250px;">
				Products </div><br>
				<input type="checkbox" name="product[]" id="product" value="handicrafts" /> Handicrafts <br>
				<input type="checkbox" name="product[]" id="product" value="jewelery" /> Jewelery <br>
				<input type="checkbox" name="product[]" id="product" value="snacks" /> Snacks <br><br>
				<div style="height:30px;width:250px;">
				<h1><input type="submit" value="Sign up" name="s" style="font-size:20px;"/></div><br></h1></h3>
			</form>
			<div style="">
			<a href="index.php"> <h2>Go back to main page</h2></a>
			</center>
	</body>
</html>