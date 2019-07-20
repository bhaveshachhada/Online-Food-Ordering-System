<?php

session_start();
$db = mysqli_connect('localhost', 'root', '','examplenew');
  
    $_SESSION['total'] = 0;
	$cid = $_GET['id'];
	$mid = $_SESSION['mid'];
	
	//$q = "select * from pays where cid = '$cid' and PAID = 0";
	
	//while($r = mysqli_fetch_array(mysqli_query($db,$q)))
	//
	//{
		echo $cid;
		$q = "update pays set PAID = 1 where cid = '$cid'";
		mysqli_query($db,$q);
	//}
	
	header('location:index.php');

?>