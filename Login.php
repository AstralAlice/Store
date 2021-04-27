<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>

</head>
<body>
<form action="Login.php" method="post">
    <label for="username">Username</label>
    <input type="text" placeholder="Type Here" name="username"><br>

    <label for="password">Password</label>
    <input type="password" placeholder="Type Here" name="password"><br>


    <input type="submit" value="login" name="submit">


</form>
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


</body>
</html>