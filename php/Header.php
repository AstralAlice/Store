<html>
<link rel="stylesheet" href="../StyleSheet/stylesheet.css">
<?php
include "php/Wallet.php";

$wallet = new Wallet();
?>

<div class="header">
    <div class="header-left">
        <a class="pagebutton" href="Index.php">Store</a>
        <a class="pagebutton" href="Profile.php">Profile</a>
        <br><br>
        <a class="title"">Cursed Plush Store</a>
    </div>
    <div class="header-right">
        <a class="pagebutton" id="topUpButton" href="TopUp.php">Balance=
            <?php
            include_once "php/user.php";
            include_once "php/Wallet.php";
            include_once "php/user.php";
            include_once "php/Wallet.php";
            include_once "php/TopUp.php";
            $topUp = new TopUp();
            $account = new user();
            $wallet = new Wallet();
            $accountID = $account->getAccountID($_SESSION["username"]);
            $bal =$wallet->getBalance($accountID);
            echo $bal;
            ?><br>Top Up</a>
    </div>
</div>