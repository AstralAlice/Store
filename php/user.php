<?php
class user
{
    protected $userID;
    protected $username;
    protected $password;

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
                echo("invalid username or password");
            }
        }

    }

    public function getAccountID($username){}


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