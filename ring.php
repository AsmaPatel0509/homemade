<?php

include("session.php");
if(!isset($_SESSION['login_session']))
{
	header('location:index.html');	
}
if($isAdmin==2)
{
	header('location:login.php');
}/*else if($isAdmin ==1)
{
	header('location:admin.php');
}*/
?>

<?php

$dbuser="root";
$dbpass="";
$host="localhost";
$db="home_made";
$conn =mysql_connect($host,$dbuser,$dbpass);
mysql_select_db($db,$conn);


if($_POST['addtocart1'])
{
	$name=$_POST['mid1'];
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r1'];
	$amt=$_POST['a1'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r2'];
	$amt=$_POST['a2'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r3'];
	$amt=$_POST['a3'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r4'];
	$amt=$_POST['a4'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r5'];
	$amt=$_POST['a5'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	$u_id = $_SESSION['login_session'];
	$pname=$_POST['r6'];
	$amt=$_POST['a6'];
	$query="INSERT INTO pending(u_id, m_id,p_name,price,status) VALUES ('".$u_id."','".$name."','".$pname."','".$amt."','0')";
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
	<form  method="post">
	<div class="outer">
		<div class="innerhead"> Rings </div>
		
		<div class="innermain">
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ring1.jpg" class="inner2">
				</div>
				<div class="inner1 font"><input type="text" value="Transparent ring" name="r1"/></div>
				<div class="inner1 font"><input type="text" value="Rs. 80" name="a1"/></div>
				<div class="iner3"> <center> <input type="submit" name="addtocart1" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant1" name="mid1"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringrose.jpg" class="inner2">
				</div>
				<div class="inner1 font"> <input type="text" value="Rose" name="r2"/>  </div>
				<div class="inner1 font"> <input type="text" value="Rs. 100" name="a2"/>  </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart2" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid2"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringpearl.jpg" class="inner2">
				</div>
				<div class="inner1 font">  <input type="text" value="Pearl ring" name="r3"/> </div>
				<div class="inner1 font">  <input type="text" value="Rs. 500" name="a3"/> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart3" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant1" name="mid3"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringsinfinity.jpg" class="inner2">
				</div>
				<div class="inner1 font"><input type="text" value="Infinity ring" name="r4"/>  </div>
				<div class="inner1 font"><input type="text" value="Rs. 100" name="a4"/>  </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart4" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid4"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringsinter.jpg" class="inner2">
				</div>
				<div class="inner1 font"><input type="text" value="Interlocked rings" name="r5"/></div>
				<div class="inner1 font"><input type="text" value="Rs. 300" name="a5"/></div>
				<div class="iner3"> <center> <input type="submit" name="addtocart5" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant3" name="mid5"/></center> </div>
			</div>
			<div class="innouter float">
				<div class="inner2"> 
					<img src="img/ringpearls.jpg" class="inner2">
				</div>
				<div class="inner1 font"><input type="text" value="Pearl ring" name="r6"/> </div>
				<div class="inner1 font"><input type="text" value="Rs. 1000" name="a6"/> </div>
				<div class="iner3"> <center> <input type="submit" name="addtocart6" value="AddToCart" class="button"> </center> </div>
				<div class="iner3"> <center> <input type="text" value="merchant2" name="mid6"/></center> </div>
			</div>
		</div>
</div>
</form>
</body>
</html>