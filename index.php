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
$itemsss = $items->getItemArray();
echo $itemsss;
?>

</body>
</html>