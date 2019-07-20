<!DOCTYPE html>
<html>
<head>
	<title>SignUP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="signupquery.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="" placeholder="Enter your name here." required/>
		</div>
		<div class="input-group">
			<label>Street</label>
			<input type="text" name="address" value="" placeholder="Enter your address here." required/>
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city" value="" placeholder="Enter your city name." required/>
		</div>
		<div class="input-group">
			<label>Pincode</label>
			<input type="text" name="pin" value="" placeholder="Enter your pincode here." required/>
		</div>
		<div class="input-group">
			<label>Email-ID</label>
			<input type="text" name="mail" value="" placeholder="Enter your email here." required/>
		</div>
		<div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact" value="" placeholder="Enter your Contact here." required/>
		</div>
		<div class="input-group">
			<label>Account No.</label>
			<input type="text" name="accout" value="" placeholder="Enter your account here." required/>
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="" placeholder="Enter your username here." required/>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd1" value="" placeholder="Enter your password here." required/>
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="pwd2" value="" placeholder="Re - Enter password." required/>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>