<?php
class user
{
    protected $userID;
    protected $username;
    protected $password;
    protected $email;
    protected $firstName;
    protected $lastName;
    public function createID(){
    include_once "Database.php";
        $id=0;
        $db= new Database();
        $link = $db->dbConnect();
        $sql = "select * from user order by User_ID desc limit 1";
        if ($res = $link->prepare($sql)){
            if($res->execute()){
                while ($row = $res->fetch(PDO::FETCH_ASSOC))
                {
                    echo $row["User_ID"];
                    return $row['User_ID'];

                }
            }
            }

    }

    public function createAccount($username, $password, $email, $firstName, $lastName){
        include_once "php/Database.php";
        $db= new Database();
        $link = $db->dbConnect();

        $idGen = new user();
        $id = $idGen->createID() +1;
        $sql = "insert into user values ( $id,  '$username',  '$password', '$firstName',  '$lastName',   '$email', $id)";
        $query = "Insert into wallet Values($id, 0.00);";
        if ($res = $link->prepare($query)){
            if($res->execute()){

            }

        }

            if ($res = $link->prepare($sql)){
                if($res->execute()){

                        header("location: login.php");
                    }
                    echo("Account Creation Failed");
                }
            }

    public function loginQuery($username, $password){
        include_once "php/Database.php";
        $db = new Database();
        $link = $db->dbConnect();

        $sql = "select * from user where Username = '$username' and Password ='$password'";

        if ($res = $link->prepare($sql)){
            if($res->execute()){
                if($res->rowCount() != 0){
                    session_start();
                    $id= row['User_ID'];
                    $_SESSION['loggedin']=true;
                    $_Session["id"]= $id;
                    $_SESSION["username"] = $username;

                    header("location: index.php");
                }
                else {
                    echo("invalid username or password");
                }
            }
        }

    }

    public function getAccountID($username)
    {
        include_once "php/Database.php";
        $db = new Database();
        $link = $db->dbConnect();

        $sql = "select * from user where Username = '$username'";

        if ($res = $link->prepare($sql)) {
            if ($res->execute()) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC))
                {

                    return $row['User_ID'];

                }


            }
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}