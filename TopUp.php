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
<form>
<label for="amount">Top Up</label>
<input type="text"  placeholder="Enter Amount:" name="amount">
<input type="submit" value="Submit" name="submit">
</form>
<?php
include_once "php/user.php";
include_once "php/Wallet.php";
include_once "php/TopUp.php";

if  (isset($_REQUEST["submit"])) {
    $amount = $_REQUEST['amount'];
    $topUp = new TopUp();
    $account = new user();
    $wallet = new Wallet();
    $accountID = $account->getAccountID($_SESSION["username"]);

    $topUp->topUpWallet($amount, $accountID);
    header("location: index.php");
}
?>


</body>
</html>