<?php
	session_start();
	$db = mysqli_connect('localhost','root','','examplenew');
	
	if(isset($_POST['save']))
	{
		$name = $_POST['name'];
		$item = $_POST['item'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		
		$p = (int)$price;
		$y = rand()%99999;
		$mid = 'm'.$y;
		
		$q = "select * from menu where mid = '$mid'";
		$r = mysqli_query($db,$q);
		$n = mysqli_num_rows($r);
		while($n == 1)
		{
			$y = rand()%99999;
			$mid = 'm'.$y;
			$q = "select * from menu where mid = '$mid'";
			$r = mysqli_query($db,$q);
			$n = mysqli_num_rows($r);
		}
		$prid = $_SESSION['prid'];
		$q = "insert into menu(prid,item,category,price,mid) values('$prid','$item','$category',$price,'$mid')";
		$r = mysqli_query($db,$q);
		header("location:menu.php");
		
	}
	
?>