<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoassu");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
	<link rel = "stylesheet"
			href = "create.css">
</head>
<body>
<div class="main-w3layouts wrapper">
		<h1>Sign Up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="user" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class = "text" type="password" id="password" name="pass" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="password1" placeholder="Confirm Passowrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<div class="wthree-text">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<button type="submit" value="Sign Up" name = "sign">Sign Up</button>
				</form>
				<p>Have an Account already? <a href="ceid.php"> Login Now!</a></p>
			</div>
		</div>

<<?php

if(isset($_POST['sign'])){

$n1=$_POST['user'];
$n2=$_POST['pass'];
$n3=$_POST['email'];

$stmt="INSERT INTO user (username,password,email)VALUES('$n1','$n2','$n3')";
if(mysqli_query($link,$stmt)){
	header("Location: ceid.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>