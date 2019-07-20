<html>
<head>
<title> Choose your food </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php

	session_start();
	


	$db = mysqli_connect('localhost','root','','examplenew');

	
	$username = "";
	$password1 = "";
	
	$flag = false;
	
	if (isset($_POST['reg_user']))
	{
		$username = $_POST['username'];
		$password1 = $_POST['password_1'];

		
		$q = "select * from cust_login where username = '$username' and password='$password1'";
		$result = mysqli_query($db,$q);
		
		$n = mysqli_num_rows($result);
		$x = 0;
		if($n == $x)
		{
			printf("Invalid Username or Password\n");
		}
		else
		{
			printf("Welcome: ");
			$q = "Select * from customer where cid = (select cid from cust_login where username='$username' and password='$password1')";
			$temp = mysqli_query($db,$q);
			$n = mysqli_fetch_array($temp);
			//extract($n);
			
			//printf("Welcome %s\n",$name);
			echo $n[0];
			//echo $pin;
			echo "<br><br>";
		}
		$_SESSION['cid'] = $n[7];
		$_SESSION['name'] = $n[0];
		$_SESSION['pin'] = $n[3];
		
    }

?>
  <form method="post" action="menu.php">

  	<div class="input">
  	  <input type="radio" name="food" value="gujarati">Gujarati</input>


  	  <input type="radio" name="food" value="marathi">Marathi</input>


  	  <input type="radio" name="food" value="chinese">Chinese</input>


  	  <input type="radio" name="food" value="punjabi">Punjabi</input>
 
  	</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Go</button>
		</div>
  </form>

<?php
		//session_start();
		//$db = mysqli_connect('localhost','root','','examplenew');
		if(isset($_SESSION['total'])){
			$total = $_SESSION['total'];
			$cid = $_SESSION['cid'];
			echo "<center><h4>Grand Total :";
			
			//$r = mysqli_fetch_array(mysqli_query($db,$q));
			//echo $r[0];
			echo $_SESSION['total'];
			echo "<br><br>";
			echo '<a href="pay.php?id=';?>
			<?php
			echo $_SESSION['cid'];
			echo '">Pay</a>';
			
		}

?> </h4></center>

</body>
</html>