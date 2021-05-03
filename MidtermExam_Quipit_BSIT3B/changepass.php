<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoassu");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel = "stylesheet"
			href = "create.css">
</head>
<?php include 'db.php' ?>
<body>
<div class="main-w3layouts wrapper">
		<h1>Change Password</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="id" placeholder="Enter your ID" required="">
					<br>
					<input class="text" type="text" name="user" placeholder="Enter your Username" required="">
					<br>
					<input class = "text" type="password" id="password" name="old" placeholder = "Enter your Old Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<br>
					<input class = "text" type="password" id="password" name="new" placeholder = "Enter your New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="cpwd" placeholder="Confirm Passowrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<div class="wthree-text">
					<div class="wthree-text">
						<label class="anim">
	
						</label>
						<div class="clear"> </div>
					</div>
					<button type="submit"  name = "change">Change Password</button>
				</form>
				<p>Have an Account already? <a href="ceid.php"> Login Now!</a></p>
			</div>
		</div>
</body>
</html>