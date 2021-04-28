<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../StyleSheet/stylesheet.css">
<?php session_start(); ?>

<head>

</head>
<body>
<div class="background">
    <div class="itemBox">
        <h2>Login</h2>
<form action="Login.php" method="post">
    <label for="username">Username</label>
    <input type="text" placeholder="Type Here" name="username"><br>

    <label for="password">Password</label>
    <input type="password" placeholder="Type Here" name="password"><br>


    <input type="submit" value="login" name="submit">


</form>
        <a href ="signup.php">Don't an account? Click here to create one</a>
<?php
    if(isset($_REQUEST["err"]))
        $msg="Invalid Username or Password";
    if (isset($msg)) echo$msg;

    if (isset($_REQUEST["submit"])){
        $usname = $_REQUEST['username'];
        $uspassword = $_REQUEST['password'];

        include_once "php/user.php";
        $user = new user();
        $user->loginQuery($usname, $uspassword);
    }?>

    </div></div>
</body>
</html>