<?php


// Handle registration request
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
$password_1 = mysql_real_escape_string($_POST['password_1']);
$password_2 = mysql_real_escape_string($_POST['password_2']);

if (empty($username)) {
    array_push($errors, "Username is required");
}
if (empty($email)) {
    array_push($errors, "Email address is required");
}
if (empty($password_1)) {
    array_push($errors, "Password is required");
}
if ($password_1 != $password_2) {
    array_push($errors, "Both passwords are not same");
}
$sql3 = "SELECT * FROM users WHERE username='$username'";
$result1 = mysqli_query($db, $sql3);
if (mysqli_num_rows($result1) > 0) {

    array_push($errors, "username already exists");
}
if (strlen($username) < 3) {
    array_push($errors, "Username is too short.It must atleast contains 3 characters.");
}
if (strpos($email, '@') <= 0) {
    array_push($errors, "Wrong email Id");
}
$b = strlen($email);
$c = $b - 4;
$d = $b - 3;
if ((strpos($email, '.') != $c) && (strpos($email, '.') != $d)) {
    array_push($errors, "Wrong email Id");

}
if (strlen($password_1) < 8) {

    array_push($errors, "Password is too short.It must altleast contains 8 characters or digits or special characters.");
}

if (preg_match('#[^a-zA-Z0-9]#', $password_1)) {
    echo ".";
} else {
    array_push($errors, "Password must contain atleast one special character.");
}

if (count($errors) == 0) {
    $sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password_1')";

    mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location:index.php');

}
