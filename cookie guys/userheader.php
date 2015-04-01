<?php
function html_header($title)
{
//all the style will go in mystle.css file.	
echo<<<_END
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
<script type="text/javascript" src="js/myfnc.js"></script>
</head>
<title> $title</title>	
		

_END;

echo <<<_END
<body>
<div id="header">
		<h1>Welcome To Our Cookie Store</h1>
</div>
<h2>
		<a href="about.php">About</a>
		<a href="ourmenu.php">Our Menu</a>
		<a href="specialOffer.php">Special Offers</a>
		<a href="rewards.php">Rewards</a>
		<a href="myOrder.php">Cart</a>
		<a href="signIn.php">Sign In</a>
		<a href="SignUp.php">Sign Up</a>
</h2>
_END;
}
function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}

function foot()
{
	echo <<<_END
<div id="div1">	
<p id="foot"><a href="customer.php">Customer Service</a> <a href="location.php">Our Location</a> <a href="careers.php">Careers</a> </p>
</div>
_END;

}

function signup()
{
	echo <<<_END
<style>
	 #checkout {
		width:200px;

		margin:0 auto;
	font-size: 20px;
	color: black;
     }
 input, textarea, select, button {
  background-color : #0093FF;
     }
</style>
<div id="checkout">
 <form action="signupvalidate.php" method ="post" >
Last name:<br>
<input type="text" name="lastname" size="20" required="required"><br>
First name:<br>
<input type="text" name="firstname" size="20" required="required"><br>
Address:<br>
<input type="text" name="address" size="50" required="required"><br>
Email:<br>
<input type="text" name="email" size="30" required="required"><br>
Credit Card Number:<br>
<input type="number" name="creditcard" size="20" required="required"><br>
Phone:<br>
<input type="text" name="phone" size="20" required="required"><br>
Username:<br>
<input type="text" name="username" size="20" required="required"><br>
Password:<br>
<input type="password" name="password" size="20" required="required"><br>
Confirm Password:<br>
<input type="password" name="confirmpassword" size="20" required="required"><br>
<br>
<input type="submit" value="Sign Up" style="font-size:20px">
<button type="reset" style="font-size:20px" align="right">Reset</button>
</form>
</div>
_END;
}