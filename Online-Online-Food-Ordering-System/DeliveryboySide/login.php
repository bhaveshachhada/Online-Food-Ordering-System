<html>
<head>
<title> Collect and Deliver your Orders </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php

	session_start();
	


	$db = mysqli_connect('localhost','root','','examplenew');

	
	$username = "";
	$password1 = "";

	$flag = false;
	
	if (isset($_POST['reg_user']))
	{
		$username = $_POST['username'];
		$password1 = $_POST['password_1'];
	
		$q = "select * from deliveryboy_login where username = '$username' and password='$password1'";
		$result = mysqli_query($db,$q);
		
		$n = mysqli_num_rows($result);
		$x = 0;
		if($n == $x)
		{
			printf("Invalid Username or Password\n");
		}
		else
		{
			printf("Welcome: ");
			$q = "Select * from permanent_deliveryboy where dbid = (select dbid from deliveryboy_login where username='$username' and password='$password1')";
			$temp = mysqli_query($db,$q);
			$n = mysqli_fetch_assoc($temp);
			extract($n);
			$p = mysqli_fetch_array($temp);
			
			echo $name;
			echo $dbid;
			//echo $pin;
			echo "<br><br>";
		}
		
		echo "Your Orders......";
		echo "<br><br>";
		?>
		<table>
		<th>Order No</th>
		<th>Provider Name</th>
		<th>Pickup</th>
		<th>Customer Name</th>
		<th>Deliver To</th>
		<th>Contact of Customer</th>
		</tr>
		<?php
		$x = mysqli_fetch_array($temp);
		$i = 1;
		$q = "select * from delivers where dbid = '$dbid'";
		$r = mysqli_query($db,$q);
		//echo "3";
		while($row = mysqli_fetch_array($r))
		{
			//echo "1";
			echo $row[0];
			echo $row[1];
			echo $row[2];
			echo $row[3];
			$tableno = "select tableno from provider where prid = '$row[3]'";
			$tn = mysqli_query($db,$tableno);
			$tnn = mysqli_fetch_array($tn);
			if($tnn[0] == 1)
			{
				$join = "select l.street from local_provider as l inner join provider p where p.prid = l.providerid";
			}
			else
			{
				$join = "select l.name,l.street from restaurant as l inner join provider p where p.prid = l.providerid";
			}
			echo "2";
			$r2 = mysqli_query($db,$join);
			$n = mysqli_fetch_array($r2);
			$join = "select l.name,l.street,l.contact from customer as l inner join delivers d where d.cid = l.cid and d.dbid = '$dbid'";
			$rslt = mysqli_query($db,$join);
			$x = mysqli_fetch_array($rslt);
			

			?>
			<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $n[0]; ?></td>
			<td><?php echo $n[1]; ?></td>
			<td><?php echo $x[0]; ?></td>
			<td><?php echo $x[1]; ?></td>
			<td><?php echo $x[2]; ?></td>
			<td><a href="delivered.php?id=<?php echo $dbid; ?>">Delivered???</a></td>
			<tr>
		<?php 
		}
	}
?>

</body>
</html>