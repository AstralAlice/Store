<?php


class Transaction extends Wallet
{
    public function Transact($amount, $id){

            $currentBal = $this->getBalance($id);
            $newAmount =  $currentBal-$amount;

            $db = new Database();
            $link = $db-> dbConnect();

            $sql = "UPDATE Wallet Set bal = $newAmount where Wallet_ID = $id";
            if ($res = $link->prepare($sql)){
                if($res->execute()){}}
        }

}