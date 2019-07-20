<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '','examplenew');

	echo "db connected\n";
	if (isset($_POST['save'])) 
	{
		$name = $_POST['name'];
		$provider = $_POST['provider'];
		$username = $_POST['username'];
		$phone1 = $_POST['contact_1'];
		$phone2 = $_POST['contact_2'];
		$password1 = $_POST['pwd1'];
		$password2 = $_POST['pwd2'];
		$email = $_POST['mail'];
		$street = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pin'];
		$acccount = $_POST['accout'];
		$special = $_POST['speciality'];
		
		$q = "select prid from provider_login where username = '$username'";
		$temp = mysqli_query($db,$q);
		$n = mysqli_num_rows($temp);
		echo $n;
		$x = 0;
		
		if($n == $x)
		{
			
			if($password1 === $password2)
			{
				$y = rand()%99999;
				$plid = "p".$y;
				
				$q = "select username from provider_login where prid = '$plid'";
				$temp = mysqli_query($db,$q);
				$n = mysqli_num_rows($temp);
				$x =1;
				
				while($n === $x)
				{
					$y = rand();
					$y = $y % 99999;
					$plid = "p".$y;
					$q = "select * from provider_login where prid = '$plid'";
					$temp = mysqli_query($db,$q);
					$n = mysqli_num_rows($temp);
				}
				$q = "insert into provider_login(username,password,cid) values('$username','$password1','$plid')";				
				mysqli_query($db,$q);
				
				$y = rand();
				$y =$y%99999;
				if($provider == "restaurant")
				{
					$c = "r";
					$t = 2;
				}
				else
				{
					$c = "l";
					$t = 1;
				}
				$pid = $c.$y;
				$q = "select * from provider where providerid = '$pid'";
				$temp = mysqli_query($db,$q);
				$n = mysqli_num_rows($temp);
				while($n === $x)
				{
					$y = rand()%99999;
					$pid = $c.$y;
					$q = "select * from provider where providerid = '$pid'";
					$temp = mysqli_query($db,$q);
					$n = mysqli_num_rows($temp);					
				}
				$q = "insert into provider(prid,tableno,providerid) values('$plid',$t,'$pid')";
				mysqli_query($db,$q);
				echo "inserted in provider\n";
				$q = "insert into provider_login(username,password,prid) values('$username','$password1','$plid')";
				mysqli_query($db,$q);
				echo "inserted in provider_login\n";
				if($t == 1)
				{
					$q = "insert into local_provider(prid,name,street,city,pin,email,speciality,account,providerid) values('$pid','$name','$street','$city',$pincode,'$email','$special',$acccount,'$plid')";
					echo "inserted in local provider\n";
				}
				else
				{
					$q = "insert into restaurant(prid,name,street,city,pin,email,account,providerid) values('$pid','$name','$street','$city',$pincode,'$email',$acccount,'$plid')";
					echo "inserted in restaurant\n";
				}
				mysqli_query($db,$q);
				$q = "insert into provider_phone(prid,contact) values('$plid',$phone1)";
				mysqli_query($db,$q);
				$q = "insert into provider_phone(prid,contact) values('$plid',$phone2)";
				mysqli_query($db,$q);
				/*
				mysqli_query($db,$q);
				echo $q;
				*/
			}
			else
			{
				echo "Passwords do not match.";
			}
		}
		else
		{
			echo "username already taken.";
		}
		$_SESSION['prid'] = $plid;
		header("location:menu.php");
	}
?>