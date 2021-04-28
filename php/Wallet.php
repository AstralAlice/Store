<?php

include_once "Database.php";
include_once "user.php";

class Wallet
{
    private $balance;
    private $walletID;

    public function getBalance($id)
    {
        $db = new Database();
        $link = $db ->dbConnect();
        $sql = "Select bal from wallet where Wallet_ID = '$id'";
        $currentBal = 0.00;


        if ($res = $link->prepare($sql)){
            if($res->execute()){
                while ($row = $res->fetch(PDO::FETCH_ASSOC))
                {

                    return $row['bal'];

                }

            }
            else{echo "WAAAAAAAAA";}
        }
    }

    public function setBalance($amount, $id){
        $db = new Database();
        $link = $db ->dbConnect();
        $sql = "UPDATE Wallet SET Bal=$amount WHERE wallet_ID=$id";
        if ($res = $link->prepare($sql)){
            if($res->execute()){}}
    }
}