<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

	$dbuser="root";
	$dbpass="";
	$host="localhost";
	$db="home_made";
	$conn =mysql_connect($host,$dbuser,$dbpass);
	mysql_select_db($db,$conn);
	 if(!isset($_SESSION['login_session']))
	 {			
			include('header.html'); 		
	 }
	 else
	 {
			include('headerlogout.html'); 
	 }	
	 $u_id=$_SESSION['login_session'];
		echo "<script> alert('$u_id'); </script>";
	 if($_POST['s'])
	 {
		
		$lists=$_POST['list'];
		$id=$_POST['i'];
		$m_id=$_POST['mid'];
		//echo $lists;
	 	foreach ($lists as $x) {
	 		# code...
			$is_checked = ($x == "0" ? '1' : '0');
			if($is_checked=='1')
			{
				echo $x;
				$query1="UPDATE pending SET status='1' where order_id='$id'";
				$result1=mysql_query($query1,$conn);
				
				//$query2="SELECT * from pending where status='1'";
				//$result2=mysql_query($conn,$query2) or die($query."<br/><br/>".mysql_error());
				//$query3="insert into final_order(u_id,m_id,p_name,qty,price,amount) values('$u_id','$m_id','$p_name','$qty','$price','$amt')";
				//$result3=mysql_query($conn,$query3) or die($query."<br/><br/>".mysql_error());
			}
		}
	 	

	 }
?>

	<h1>My Orders</h1><br>
	<?php 
		

		$user_check=$_SESSION['login_session'];
		//echo $user_check;
		$query="SELECT * FROM pending WHERE u_id='$user_check'";
		$result=mysql_query($query,$conn) or die($query."<br/><br/>".mysql_error());
		//echo $result;
	?>
	
	<form method="post">
		<?php
			while ($row=mysql_fetch_array($result)) {
		?>	
			<input type="text" name="p_name" value="<?php echo $row['p_name']; ?>" />
			<input type="text" name="qty" value="<?php echo $row['qty']; ?>" />
			<input type="text" name="price" value="<?php echo $row['price']; ?>" />
			<input type="text" name="amt" value="<?php echo $row['qty']*$row['price']; ?>" />
			<input type="text" name="i" value="<?php echo $row['order_id']; ?>" hidden="hidden" />
			<input type="text" name="mid" value="<?php echo $row['m_id']; ?>" hidden="hidden" />
			<input type="checkbox" name="list[]" id="list" value="0" ></br>
			
		<?php
			}
		?>
	<input type="submit" name="s" value="Confirm Order">
</body>
</html>	