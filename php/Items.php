<?php


class Items
{
private $product_ID;
private $name;
private $price;
private $file_Path;
public function getItemArray($id)
{
    include_once "php/Database.php";
    $db = new Database();
    $link = $db->dbConnect();

    $sql = "select * from products where Product_ID = '$id'";

    try{
        $res = $link->prepare($sql);
        $result = $res->execute();}
        catch(PDOException $exception){
            echo "Failed to run query: ";
        }
    while($row = $res->fetch(PDO::FETCH_ASSOC)){
        echo $row["Name"] . ", " . $row["Price"];
    }
}
}