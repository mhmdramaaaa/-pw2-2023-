<?php


include 'class_kasus.php';


$baju = new Baju("Kaos", "M", "Hitam", "Uniqlo");


$celana = new Celana("Jeans", "42", "Slim Fit", "Levi's");

$jaket = new Jaket("coach", "XL", "soft parasut", "Erigo");


echo "Informasi Baju:<br> " . $baju->getInfo() . "<br>";
echo "<br>";

echo "Informasi Celana:<br> " . $celana->getInfo() . "<br>";
echo "<br>";

echo "Informasi Jaket:<br> " . $jaket->getInfo();
echo "<br>";

?>
