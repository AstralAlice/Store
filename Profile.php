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
<div class="background">
    <div class="itemBox">
<a href="Logout.php"><h2>Logout</h2></a>
    </div>
</div>
</body>
</html>