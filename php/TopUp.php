<?php
include_once "Wallet.php";


class TopUp extends Wallet
{
    public function topUpWallet($amount, $id){
        $currentBal = $this->getBalance($id);
        $newAmount = $amount + $currentBal;

        $db = new Database();
        $link = $db-> dbConnect();

        $sql = "UPDATE Wallet Set bal = $newAmount where Wallet_ID = $id";
        if ($res = $link->prepare($sql)){
            if($res->execute()){}}
    }

}