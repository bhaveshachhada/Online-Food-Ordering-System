<html>
<head>
<title>Edit Your Menu</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php
session_start();
$db = mysqli_connect('localhost','root','','examplenew');

$mid = $_GET['id'];
$mod = $_GET['mod'];
//$mid =$_SESSION['mid'] ;
if ($mod == 'delete')
{
	echo $mid;
	$q = "delete from menu where mid = '$mid'";
	$r = mysqli_query($db,$q);
	header("location:menu.php");
	//echo $q;
	//echo $r;
}
else
{
	$q = "select * from menu where mid = '$mid'";
	$r = mysqli_query($db,$q);
	$t = mysqli_fetch_array($r);
?>
<form action = "edit.php" method="post">

	<input type="hidden" name="mid" value="<?php echo $t[4]; ?>" >
  	<div class="input-group">
  	  <label>Item</label>
  	  <input type="text" name="item" value="<?php echo $t[1]; ?>"  placeholder="Item Name" required/>
  	</div>
	  	<div class="input-group">
  	  <label>Category</label>
  	  <input type="text" name="category" value="<?php echo $t[2]; ?>" placeholder="Item Name" required/>
  	</div>
  	<div class="input-group">
  	  <label>Price</label>
  	  <input type="text" name="price" value="<?php echo $t[3]; ?>" placeholder="Price" required/>
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="save">Save</button>
  	</div>

</form>	
<?php } ?>

</body>
</html>