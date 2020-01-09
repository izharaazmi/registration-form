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
<h2>Login</h2>
</div>
<form action="login.php" method="POST">
<?php
include('errors.php');
?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<button input type="submit" name="signin" class="btn">Sign in</button>
</div>
<p>Not yet a member?<a href=register.php>Sign up</p>


</body>
</html>
