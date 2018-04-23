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

	 if(!isset($_SESSION['login_session']))
	 {			
			include('header.html'); 		
	 }
	 else
	 {
			include('headerlogout.html'); 
	 }	
	 $u_id=$_SESSION['login_session'];
	 $list=$_POST['list'];
	 if($_POST['s'])
	 {
	 	foreach ($list as $x) {
	 		# code...
	 		$query1="UPDATE pending SET status='1' WHERE u_id='$u_id'";
	 		$result1=mysql_query($conn,$query1);
	 		//$query2="SELECT * from pending";
	 		//$result=mysql_query($query,$conn) or die($query."<br/><br/>".mysql_error());
	 		//$u_id=$

	 	}

	 }
?>

	<h1>My Orders</h1><br>
	<?php 
		$dbuser="root";
		$dbpass="";
		$host="localhost";
		$db="home_made";
		$conn =mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($db,$conn);

		$user_check=$_SESSION['login_session'];
		//echo $user_check;
		$query="SELECT * FROM pending WHERE u_id='$user_check'";
		$result=mysql_query($query,$conn) or die($query."<br/><br/>".mysql_error());
		//echo $result;
	?>
	<table>
		<?php
			while ($row=mysql_fetch_array($result)) {
		?>		

			<tr>
				<td><?php echo $row['p_name'] ?></td>
			
				<td><?php echo $row['price'] ?></td>
			
				<td><?php echo $row['qty'] ?></td>
			
				<td><?php
						$amt=$row['price']*$row['qty'];
				 echo $amt ?></td>
			
				<td><input type="checkbox" name="list[]"></td>
			</tr>
<?php
			}
		
?>

	</table>
	<input type="submit" name="s" value="Confirm Order">
</body>
</html>	