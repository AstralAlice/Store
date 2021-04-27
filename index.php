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
    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/nana.png')"></div> <?php  $item2 = $items->getItemArray(1); ?></div>

    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/him.png')"></div> <?php  $item2 = $items->getItemArray(2); ?></div>

    <div class="itemBox"><div class="innerBox" style="background-image:url('Img/hom.png')"></div> <?php  $item2 = $items->getItemArray(3); ?></div>
    </div>
</body>
</html>