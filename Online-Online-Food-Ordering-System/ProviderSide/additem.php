<html>
<head>
<title>Add To Menu</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	session_start();
	$db = mysqli_connect('localhost','root','','examplenew');
	$prid = $_SESSION['prid'];
	//$_SESSION['prid'] = $prid;
	?>
<form action = "add.php" method="post">

  	<div class="input-group">
  	  <label>Item</label>
  	  <input type="text" name="item" value="" placeholder="Item Name" required/>
  	</div>
	  	<div class="input-group">
  	  <label>Category</label>
  	  <input type="text" name="category" value="" placeholder="Item Name" required/>
  	</div>
  	<div class="input-group">
  	  <label>Price</label>
  	  <input type="text" name="price" value="" placeholder="Price" required/>
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="save">Save</button>
  	</div>

</form>
</body>
</html> 