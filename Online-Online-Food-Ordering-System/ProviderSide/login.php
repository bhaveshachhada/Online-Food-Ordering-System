<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	session_start();
	//require_once('conn.php');

	$db = mysqli_connect('localhost','root','','examplenew');
	//mysql_select_db('examplenew',$db);
	
	$username = "";
	$password1 = "";
	//$password2 = "";
	$flag = false;
	
	if (isset($_POST['reg_user']))
	{
		$username = $_POST['username'];
		$password1 = $_POST['password_1'];
		//$password2 = $_POST['password_2'];
		
		//if (mysqli_query($db,"select count(username) from cust_login where username='$username'"));
		
		$q = "select * from provider_login where username = '$username' and password='$password1'";
		$result = mysqli_query($db,$q);
		
		$n = mysqli_num_rows($result);
		$x = 0;
		if($n == $x)
		{
			printf("Invalid Username or Password\n");
		}
		else
		{
			
			$row =  mysqli_fetch_array($result,MYSQLI_NUM);
			$_SESSION["prid"]= $row[2];
			echo $row[2];
			printf("Welcome: ");
			//$q = "Select name from customer where cid = (select cid from cust_login where username='$username' and password='$password1')";
			//$temp = mysqli_query($db,$q);
			//$n = mysqli_fetch_assoc($temp);
			//extract($n);
			
			//printf("Welcome %s\n",$name);
			echo "logged in.";
		}
		/*
		$n = mysql_num_rows($result);
		
		if($n == 1)
		{
			echo "Logged In.";
		}
		else
		{
			echo "Incorrect Username or Password.";
		}
		
		
		
		//$q = "INSERT INTO xyz (name, address) VALUES ('$name', '$address')";
*/
    }
	

?>
<form action="menu.php" method="post">
<button type="submit" name="order" class="btn">Show Orders</button>
</form>
</body>
</html>