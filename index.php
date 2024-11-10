<?php
    include_once("User.php");
    include_once("Product.php");
    include_once("Marmalade.php");
    include_once("Rate.php");
    include_once("Cart.php");

    $user = new User("Миша", "kabi@ya.ru", "123");
    $product = new Product("Коки-кола", "Вкусный злой коки-кола", 100);
    $marmelade = new Marmalade("Малиновый мармелад", "Вкусный малиной мармелад 100г", 200, 100);
    $rate = new Rate($user, 1, "Не вкусный коки-кола, добрый кола лучше");
    $product->addRate($rate);
    $user->cart->addProduct($product);
    $user->cart->addProduct($marmelade);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Классы и наследование</title>
</head>
<body>
    <div>
        <h1>Классы и наследование</h1>
        Пользователь: <? echo $user->getName() ?> <br>
        eMail: <? echo $user->getEmail() ?>
    </div>
    <br>
    <div>
        <h2>Корзина:</h2>
        <?
            foreach ($user->cart->getItems() as $cart_product) {
                echo $cart_product->getName(); ?> <br> <?
            }
        ?>
    </div>
    <br>
    <div>
        <h2>Отзывы на кока-кола:</h2>
        <? 
            foreach ($product->getRates() as $rate_in_prod) {
                ?> Пользователь: <? echo $rate_in_prod->getUser()->getName() ?> <br>
                <? echo $rate_in_prod->getRate() ?> из 5 <br>
                <? echo $rate_in_prod->getMessage();
            }
        ?>
    </div>
</body>
</html>