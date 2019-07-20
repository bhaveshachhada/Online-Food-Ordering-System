<html>
<head>
<title>Select your order</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '','examplenew');
$mid = $_GET['id'];
$_SESSION['mid'] = $mid;
$cid = $_SESSION['cid'];
?>
<form action="additem.php" method="post">
<div class="input-group">
<label>Quantity</label>
<input type="text" name="qty" value="0" required/>
</div>
<div class="input-group">
<label>Confirm</label>
<button type="submit" name="save"  class="btn">SAVE</button>
</div>
</form>
</body>
</html>