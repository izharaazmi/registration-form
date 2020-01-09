<?php  
include('server.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Registration Form</h2>
</div>
<form action="register.php" method="POST" onsubmit="return myfun()" name="MyForm">
<?php
error_reporting(0);
include('errors.php');
?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" placeholder="Enter username" value="" id="username">
<span style="color:red;font-size:12px;"id="message"> </span>

</div>
<div class="input-group">
<label>Email</label>
<input type="text" name="email" placeholder="abc@example.com" value="">
<span style="color:red;font-size:12px;"id="messagess"> </span>

</div>
<div class="input-group">
<label>Password</label>
<input type="password" id="password_1" name="password_1" placeholder="Enter your password" value="" >
<span style="color:red;font-size:12px;"id="messages"> </span>
</div>
<div class="input-group">
<label style="color:black">Confirm Password</label>
<input type="password" id="password_2" name="password_2" placeholder="Re-enter your password" value="">

</div>
<button input type="submit" name="register" class="btn" >Register</button>
<p>Already a member?<a href=login.php>Sign In</p>
</form>
</body>
</html>
