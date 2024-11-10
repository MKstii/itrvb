<?php
    include_once("DigitalProduct.php");
    include_once("PhisicalProduct.php");
    include_once("WeightProduct.php");

    $digital = new DigitalProduct("Книга бомба", 200);
    $phisical = new PhisicalProduct("Книга бомба", 200, 2);
    $weight = new WeightProduct("Мармелад", 200, 0.200);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Абстрактные классы</title>
</head>
<body>
    <h2>Цифровой продукт (книга, цена = 200)</h2>
    Название: <?echo $digital->name?>
    Итого: <?echo $digital->getFinalPrice()?>

    <h2>Физический продукт (книга, цена = 200, количество = 2)</h2>
    Название: <?echo $phisical->name?>
    Итого: <?echo $phisical->getFinalPrice()?>

    <h2>Весовой продукт (Мармелад, цена = 200 за кило, вес = 0.2 кг)</h2>
    Название: <?echo $weight->name?>
    Итого: <?echo $weight->getFinalPrice()?>

</body>
</html>