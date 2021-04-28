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
include_once "php/Items.php";
include_once "php/Database.php";
$items = new Items();

?>
<div class="background">
    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/nana.png')"></div> <?php  $item2 = $items->getItemArray(1); ?><form><input type="submit" value="Purchase" name="submit"></form></div>

    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/him.png')"></div> <?php  $item2 = $items->getItemArray(2); ?><form><input type="submit" value="Purchase" name="submit"></form></div>

    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/hom.png')"></div> <?php  $item2 = $items->getItemArray(3); ?><form><input type="submit" value="Purchase" name="submit"></form></div>

<?php
if (isset($_REQUEST["submit"])) {

include_once "php/Transaction.php";
include_once "php/user.php";
$account = new user();
$accountID = $account->getAccountID($_SESSION["username"]);
$transaction = new Transaction();
$transaction->Transact(10, $accountID);
    header("location:complete.php");
}
?>
</div>
</body>
</html>