<html>
<head>
<title> Admin </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php

	session_start();
	
	//require_once('conn.php');

	$db = mysqli_connect('localhost','root','','examplenew');
	//mysql_select_db('examplenew',$db);
	
	$username = "Admin";
	$password1 = "Admin123";
	//$password2 = "";
	$flag = false;
	
	if (isset($_POST['reg_user']))
	{
		$username = $_POST['username'];
		$password1 = $_POST['password_1'];
		//$password2 = $_POST['password_2'];
		
		//if (mysqli_query($db,"select count(username) from cust_login where username='$username'"));
		
		
		
		if($username=="Admin" && $password1=="Admin123")
		{
            $_SESSION['admin']="admin";
            header("location:home.php");
        }
		else
		{
            printf("Invalid Username or Password\n");
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
  
</body>
</html>