
<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=pet_shop", "root", "");
if (isset($_GET["vendor"])) {
    $statement = $db->prepare("SELECT items.name, price, quantity, quality FROM items inner join vendors on FID_Vender = ID_Vendors WHERE Vendors.name=?"); // подготовленный запрос
    $statement->execute([$_GET["vendor"]]);
    while ($data = $statement->fetch()) {
        echo " <br> Name: {$data['name']}  Price: {$data['price']}  Quantity: {$data['quantity']}  Quality: {$data['quality']} ";
    }
}
?>
