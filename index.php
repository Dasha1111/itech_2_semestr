<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form class="form_block" action="vendor/vendor.php" method="post">
    <input placeholder="Vendor:" type="text" name="vendor">
    <input type="submit" value="Search"><br> 
</form>
<br>
<form class="form_block" action="vendor/category.php" method="post">
    <input placeholder="Category:"type="text" name="category">
    <input type="submit" value="Search"><br>
</form>
<br>
<form class="form_block" action="vendor/price.php" method="post">
    <input placeholder="Min price:" type="text" name="min">
    <input placeholder="Max price:" type="text" name="max">
    <input type="submit" value="Search"><br>
</form>
<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=pet_shop", "root", "");
?>
</body>
</html>