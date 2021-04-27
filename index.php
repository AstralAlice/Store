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
    <div class="itemBox"><div class="innerBox"></div> <?php  $item2 = $items->getItemArray(1); ?></div>
    </div>
</body>
</html>