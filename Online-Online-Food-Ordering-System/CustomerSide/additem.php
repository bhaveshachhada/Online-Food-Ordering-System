<?php

		session_start();
	$db = mysqli_connect('localhost', 'root', '','examplenew');
	
	$mid = $_SESSION['mid'];
	$cid = $_SESSION['cid'];
	echo $cid;
echo $mid;	
	if(isset($_POST['save']))
	{
		$qty = $_POST['qty'];
		$qtt = (int)$qty;
		
		
		
			$y = rand()%99999;
			$oid = 'o'.$y;			
			$q = "select * from orders where oid = '$oid'";	
			while(1 == mysqli_num_rows(mysqli_query($db,$q)))
			{
				$y = rand()%99999;
				$oid = 'o'.$y;
				$q = "select * from orders where oid = '$oid'";
				
			}
			//$_SESSION['oid'] = $oid;
			$q = "select * from menu where mid = '$mid'";
			$r = mysqli_fetch_array(mysqli_query($db,$q));
			$x = (int)$r[3];
			//echo $x;
			//echo $r[0];
			//echo $r[1];
			//echo $r[2];
			//echo $r[3];
			//echo $mid;
			$q = "insert into orders(oid,amount,prid) values('$oid',$x*$qtt,'$r[0]')";
			mysqli_query($db,$q);
			
			$q = "insert into orderitems(oid,item,quantity,price,sum) values('$oid','$r[1]',$qtt,$x,$x*$qtt)";
			mysqli_query($db,$q);
			
			$pyid = 'py'.$y;
			$q = "select * from pays where pid = '$pyid'";
			while(1 == mysqli_num_rows(mysqli_query($db,$q)))
			{
				$y = rand()%99999;
				$pyid = 'o'.$y;
				$q = "select * from orders where oid = '$oid'";

			}
			$q = "insert into pays(pid,oid,cid,prid) values('$pyid','$oid','$cid','$r[0]')";
			mysqli_query($db,$q);
			$_SESSION['cid'] = $cid;
		$q = "insert into orders(oid,amount,prid) values()";
			if($_SESSION['total']== null)
			{
				$_SESSION['total'] = 0; 
			}
			$q = "select * from pays where cid = '$cid' and PAID=0";
			while($w = mysqli_fetch_array(mysqli_query($db,$q)))
			{
				$q = "select * from orders where oid = '$w[1]'";
				$y = mysqli_fetch_array(mysqli_query($db,$q));
			echo $w[1];
			echo $y[1];
				$p = $_SESSION['total'] + $y[1];
			$_SESSION['total'] = $p;
			echo $_SESSION['total'];
			}
			
	}
	header("location:login.php");
?>