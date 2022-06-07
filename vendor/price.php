<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=pet_shop", "root", "");
if (isset($_GET["min_price"])) {
    $statement = $db->prepare("SELECT items.name, price, quantity, quality FROM items WHERE price between ? and ?");
    $statement->execute([$_GET["min_price"], $_GET["max_price"]]);
    $data = $statement->fetchAll();
    echo json_encode($data);
}
?>
