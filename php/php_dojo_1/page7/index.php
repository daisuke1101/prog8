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
$max = 0;
for ($i = 0; $i < count($prices); $i++) {
  $sum += $prices[$i];
  if ($prices[$i] > $max) {
    $max = $prices[$i];
  }
}

echo '合計金額は' . $sum . '円です<br>';
echo '最高価格は' . $max . '円です';
?>