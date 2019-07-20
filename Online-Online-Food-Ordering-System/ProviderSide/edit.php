<?php
	session_start();
	$db = mysqli_connect('localhost','root','','examplenew');
	
	if(isset($_POST['save']))
	{
		
		$item = $_POST['item'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$p =(int) $price;
		$mid = $_POST['mid'];
		$q = "update menu set item = '$item' where mid = '$mid'";
		$r = mysqli_query($db,$q);
		$q = "update menu set category = '$category' where mid = '$mid'";
		$r = mysqli_query($db,$q);
		$q = "update menu set price = $p where mid = '$mid'";
		$r = mysqli_query($db,$q);
		header("location:menu.php");
	}
?>