<?php


$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
if(empty($username))
{
    array_push($errors,"Username is required");
}
if(empty($password))
{
    array_push($errors,"Password is required");
}
if(count($errors)==0)
{
    $sql1="SELECT * FROM users WHERE username='$username' && password='$password'";
    $result=mysqli_query($db,$sql1);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['username']=$username;
        $_SESSION['success']="You are now logged in";
        header('location:index.php');
    }
    else
    {
        array_push($errors,"Wrong username or password");
        //header('location:login.php');
    }
}
