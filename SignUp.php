<!DOCTYPE html>
<html lang="en">


<head>

</head>
<body>

    <form>
    <label for="email">Email</label>
    <input type="email" placeholder="Type Here" name="email"><br>

    <label for="username">Create Username</label>
    <input type="text" placeholder="Type Here" name="username"><br>

    <label for="password">Create Password</label>
    <input type="password" placeholder="Type Here" name="password"><br>

    <label for="firstname">First Name</label>
    <input type="text" placeholder="Type Here" name="firstname"><br>

    <label for="lastname">Last Name</label>
    <input type="text" placeholder="Type Here" name="lastname"><br>

    <input type="submit" value="sign up" name="submit">
    </form>
    <?php
    if (isset($_REQUEST["submit"])){
    $usname = $_REQUEST['username'];
    $uspassword = $_REQUEST['password'];
    $usfirstname= $_REQUEST['firstname'];
    $uslastname= $_REQUEST['lastname'];
    $usemail= $_REQUEST['email'];


    include_once "php/user.php";
    $user = new user();
    $user->createAccount($usname, $uspassword,$usemail, $usfirstname,$uslastname);
    }?>

</body>
</html>