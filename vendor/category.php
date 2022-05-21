
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
if (isset($_POST["category"])) {
    $statement = $db->prepare(
        "SELECT items.name, price, quantity, quality FROM items inner join Categories on FID_Category = ID_Categories WHERE Categories.name=?"
    );
    $statement->execute([$_POST["category"]]);

    while ($data = $statement->fetch()) {
        echo "<br> Name: {$data['name']}  Price: {$data['price']}  Quantity: {$data['quantity']}  Quality: {$data['quality']} ";
    }
}

?>
</body>
</html>