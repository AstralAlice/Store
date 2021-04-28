<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["loggedin"]))
    header("location:Login.php");
?>

<head>

</head>
<body>
<?php
require 'php/Header.php';
?>
<label for="amount">Top Up</label>
<input type="text"  placeholder="Enter Amount:" name="amount">
<input type="submit" value=Submit>
<?php
include_once "php/user.php";
include_once "php/Wallet.php";
include_once "php/TopUp.php";
?>


</body>
</html>