<?php
require_once('drink.php');
require_once('food.php');

$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');

// $juiceのセッターを用いて$typeプロパティに'アイス'を代入してください
$juice->setType('アイス');

// $coffeeのセッターを用いて$typeプロパティに'ホット'を代入してください
$coffee->setType('ホット');

$menus = array($juice, $coffee);

?>