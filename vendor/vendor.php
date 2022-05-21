
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=pet_shop", "root", "");
if (isset($_POST["vendor"])) {
    $statement = $db->prepare(
        "SELECT items.name, price, quantity, quality FROM items inner join vendors on FID_Vender = ID_Vendors WHERE Vendors.name=?"
    );
    $statement->execute([$_POST["vendor"]]);

    while ($data = $statement->fetch()) { 
        echo "<br> Name: {$data['name']}  Price: {$data['price']}  Quantity: {$data['quantity']}  Quality: {$data['quality']}";
    }
}

?>
</body>
</html>