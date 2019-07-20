<html>
<head>
	<title> Choose your Dinner </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
<tr>
<th>No.</th>
<th>Item</th>
<th>Category</th>
<th>Provider Name</th>
<th>Price</th>
</tr>
	<?php
		session_start();
		$db = mysqli_connect('localhost','root','','examplenew');
		
		$pin = $_SESSION['pin'];
		
		if(isset($_POST['save']))
		{
			$food = $_POST['food'];
		$x = "select * from local_provider where pin = $pin";
		$local = mysqli_query($db,$x);
		$y = "select * from restaurant where pin = $pin";
		$rest = mysqli_query($db,$y);
		$cid = $_SESSION['cid'];
		$i = 1;
		if($food == 'gujarati')
		{
			while($row = mysqli_fetch_array($local))
			{
				
				$q = "select * from menu where category = 'gujarati' and prid = '$row[8]'";
				////echo $q;
				$t = mysqli_query($db,$q) or die("hello");
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
			<?php
			}
			}
			while($row = mysqli_fetch_array($rest))
			{
				$q = "select * from menu where category = 'gujarati' and prid = '$row[8]'";
				$t = mysqli_query($db,$q);
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
				<?php
			}
			}
		}
		elseif($food == 'chinese')
		{
			while($row = mysqli_fetch_array($local))
			{
				
				$q = "select * from menu where category = 'chinese' and prid = '$row[8]'";
				////echo $q;
				$t = mysqli_query($db,$q) or die("hello");
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
			<?php
			}
			}
			while($row = mysqli_fetch_array($rest))
			{
				$q = "select * from menu where category = 'chinese' and prid = '$row[8]'";
				$t = mysqli_query($db,$q);
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
				<?php
			}
			}
		}
		elseif($food == 'marathi')
		{
			while($row = mysqli_fetch_array($local))
			{
				
				$q = "select * from menu where category = 'marathi' and prid = '$row[8]'";
				////echo $q;
				$t = mysqli_query($db,$q) or die("hello");
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
			<?php
				}
			}
			while($row = mysqli_fetch_array($rest))
			{
				$q = "select * from menu where category = 'marathi' and prid = '$row[8]'";
				$t = mysqli_query($db,$q);
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
				<?php
				}
			}		
		}
		if($food == 'punjabi')
		{
			while($row = mysqli_fetch_array($local))
			{
				
				$q = "select * from menu where category = 'punjabi' and prid = '$row[8]'";
				////echo $q;
				$t = mysqli_query($db,$q) or die("hello");
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
			<?php
				}
			}
			while($row = mysqli_fetch_array($rest))
			{
				$q = "select * from menu where category = 'punjabi' and prid = '$row[8]'";
				$t = mysqli_query($db,$q);
				while($n = mysqli_fetch_array($t))
				{
				?>
				<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $n[1]; ?></td>
				<td><?php echo $n[2]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $n[3]; ?></td>
				<td><a href="add.php?id=<?php echo $n[4]; ?>">Add</a></td>
				</tr>
				<?php
				}
			}
		}
				
		}
	?>
		

		</table>
		<center><h4><a href=""></a></h4></center>
</body>
</html>