<?php

	session_start();
	$db = mysqli_connect('localhost','root','','examplenew');
	
	$dbid = $_GET['id'];
	$oid = $_SESSION['oid'];
	$u = $_SESSION['username'];
	$p = $_SESSION['pswd'];
	$q = "delete from delivers where dbid = '$dbid' and oid = '$oid'";
	mysqli_query($db,$q);
		$q = "delete from orderitems where oid = '$oid'";
	mysqli_query($db,$q);
		$q = "delete from orders where oid = '$oid'";
	mysqli_query($db,$q);
	
	$_SESSION['username'] = $u;
	$_SESSION['pswd'] = $p;
	header("location:index.php");

?>