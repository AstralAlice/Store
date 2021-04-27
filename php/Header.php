<html>
<?php
include "php/Wallet.php";

$wallet = new Wallet();
?>
<style>@import "../StyleSheet/stylesheet.css";</style>
<div class="header">
    <div class="header-left">
        <a class="pagebutton" href="Index.php">Store</a>
        <a class="pagebutton" href="Profile.php">Profile</a>
    </div>
    <div class="header-right">
        <a class="pagebutton" id="topUpButton" href="TopUp.php">Balance=
            <?php
            include_once "php/user.php";
            include_once "php/Wallet.php";
            ?></a>
    </div>
</div>