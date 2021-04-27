<?php


class Database
{
public static function dbConnect(){
    try {
        return new PDO("mysql:host=localhost;dbname=Store", 'root', 'password');
    }catch(PDOException $error){
        echo $error->getMessage();
    }
}
}