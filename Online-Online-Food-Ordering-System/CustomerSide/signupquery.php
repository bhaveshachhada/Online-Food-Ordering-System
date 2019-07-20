<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '','examplenew');
	//$p=mysql_select_db('example',$db);

	//$name = "";
	//$address = "";
	//$id = 0;
	//$update = false;
	
	//echo $q;
	if (isset($_POST['save'])) 
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$phone = $_POST['contact'];
		$password1 = $_POST['pwd1'];
		$password2 = $_POST['pwd2'];
		$email = $_POST['mail'];
		$street = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pin'];
		$acccount = $_POST['accout'];
		
		$q = "select cid from cust_login where username = '$username'";
		$temp = mysqli_query($db,$q);
		$n = mysqli_num_rows($temp);
		echo $n;
		$x = 0;
		echo "Recorded Successfully.1";
		if($n == $x)
		{
			echo "Recorded Successfully.3";
			if($password1 === $password2)
			{
				$id = "c".rand();
				$q = "select username from cust_login where cid = '$id'";
				$temp = mysqli_query($db,$q);
				$n = mysqli_num_rows($temp);
				$x =1;
				echo "Recorded Successfully.2";
				while($n === $x)
				{
					$y = rand();
					$y = $y % 99999;
					$id = "c".$y;
					$q = "select * from cust_login where cid = '$id'";
					$temp = mysqli_query($db,$q);
					$n = mysqli_num_rows($temp);
				}
				$q = "insert into cust_login(username,password,cid) values('$username','$password1','$id')";
				mysqli_query($db,$q);
				$q = "insert into customer(name,street,city,pin,email,contact,account,cid) values('$name','$street','$city',$pincode,'$email',$phone,$acccount,'$id')";
				mysqli_query($db,$q);
				//echo $q;
				
				header("location:index.php");
			}
		}
	}
?>