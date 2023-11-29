<?php
$product = strip_tags(trim($_POST['product']));
$material = strip_tags(trim($_POST['material']));
$counter = strip_tags(trim($_POST['counter']));

echo "<h1>Ваш заказ принят</h1>";
echo "<h1>Заказано изделие: $product</h1>";
echo "<h1>Материал: $material</h1>";
echo "<h1>Кол-во: $counter</h1>";
