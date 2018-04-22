<?php
session_start();
$dbuser="root";
$dbpass="";
$host="localhost";
$db="home_made";
$conn =mysql_connect($host,$dbuser,$dbpass);
mysql_select_db($db,$conn);
$aid=$_SESSION['id'];
if($_POST['addtocart1'])
{
	
	$name=$_POST['mid1'];
	
	$query="insert into pending(u_id,m_id,status) values('$aid','$name','0')";
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
elseif($_POST['addtocart2'])
{
	
	$name=$_POST['mid2'];
	
	$query="insert into pending(m_id,status) values('$name','0')";
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
elseif($_POST['addtocart3'])
{
	
	$name=$_POST['mid3'];
	
	$query="insert into pending(m_id,status) values('$name','0')";
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
elseif($_POST['addtocart4'])
{
	
	$name=$_POST['mid4'];
	
	$query="insert into pending(m_id,status) values('$name','0')";
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
elseif($_POST['addtocart5'])
{
	
	$name=$_POST['mid5'];
	
	$query="insert into pending(m_id,status) values('$name','0')";
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
elseif($_POST['addtocart6'])
{
	
	$name=$_POST['mid6'];
	
	$query="insert into pending(m_id,status) values('$name','0')";
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
	<link rel="stylesheet" type="text/css"  href="index.css">
	<title> Rings </title>
</head>
<body>
	<object type="text/html" data="header.html" width="1510px" height="70px"></object>
	<form action="" method="post">
	<div class="outer">
		<div class="innerhead"> Rings </div>
		
		<div class="innermain">
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ring1.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Transparent ring, Rs. 80 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart1" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant1" name="mid1"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringrose.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Rose, Rs. 100 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart2" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid2"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringpearl.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Pearl ring, Rs. 500 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart3" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant1" name="mid3"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringsinfinity.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Infinity ring, Rs. 100 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart4" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid4"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringsinter.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Interlocked rings, Rs. 300 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart5" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant3" name="mid5"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringpearls.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <a href="" class="font1"> Pearl ring, Rs. 1000 </a> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart6" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid6"/></center> </div>
			</div>
		</div>
</div>
</form>
</body>
</html>