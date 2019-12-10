<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$sum = 0;
for ($i = 0; $i < count($prices); $i++) {
  $sum += $prices[$i];
}

echo '合計金額は' . $sum . '円です';
?>