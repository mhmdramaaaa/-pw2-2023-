<?php

// Include file class_kasus.php
include 'class_kasus.php';

// Buat objek baju
$baju = new Baju("Kaos", "M", "Hitam", "Uniqlo");

// Buat objek celana
$celana = new Celana("Jeans", "42", "Slim Fit", "Levi's");

// Buat objek jaket
$jaket = new Jaket("coach", "XL", "soft parasut", "Erigo");

// Tampilkan informasi pakaian
echo "Informasi Baju:<br> " . $baju->getInfo() . "<br>";
echo "<br>";

echo "Informasi Celana:<br> " . $celana->getInfo() . "<br>";
echo "<br>";

echo "Informasi Jaket:<br> " . $jaket->getInfo();
echo "<br>";

?>
