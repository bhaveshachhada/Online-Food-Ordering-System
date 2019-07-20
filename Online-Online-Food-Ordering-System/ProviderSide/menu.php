<html>
<head>
<title>Your Orders</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	session_start();
	$db = mysqli_connect('localhost','root','','examplenew');
	$prid = $_SESSION['prid'];
	//$_SESSION['pid'] = $prid;
	echo $prid;
	$q = "select * from menu where prid = '$prid'";
	$r = mysqli_query($db,$q);
?>
<table>
	<tr>
	<th>Item</th>
	<th>category</th>
	<th>price</th>
	</tr>
	<tr>
	<?php
		while($row = mysqli_fetch_array($r))
		{
		?>
		<tr>
		<td> <?php echo $row[1]; ?></td>
		<td> <?php echo $row[2]; ?></td>
		<td> <?php echo $row[3]; ?></td>
		<td><a href="modify.php?mod=edit&id=<?php echo $row[4]; ?>">Edit</a></td>
		<td><a href="modify.php?mod=delete&id=<?php echo $row[4]; ?>">Delete</a></td>
		</tr>
		
	<?php	} ?>
	
</table>
<font face="Times New Roman" align="center"><center>
<a href = "additem.php?id=<?php echo $prid; ?>">Add Item</a></center>
</font><br><br>
Your Orders.......<br><br>
<table>
<tr>
<th>Item</th>
<th>Quantity</th>
<th>Price</th>
<th>Sum</th>
</tr>
<?php
	$i = 1;
	$q = "select oid from orders where prid = '$prid'";
	$r = mysqli_query($db,$q);
	while($row = mysqli_fetch_array($r))
	{
		echo "order - ".$i;
		$t = "select * from orderitems where oid = '$row[0]'";
		$x = mysqli_query($db,$t);
		while($ord = mysqli_fetch_array($x))
		{
?>
<tr>
<td><?php echo $ord[1];?></td>
<td><?php echo $ord[2];?></td>
<td><?php echo $ord[3];?></td>
<td><?php echo $ord[4];?></td>

</tr>
<?php }
$i++;
} ?>

</body>
</html>