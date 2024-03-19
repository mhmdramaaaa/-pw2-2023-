<?php
// Memanggil class Balok
require_once "class_balok.php";

// Membuat 4 objek dengan dimensi berbeda
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(15, 9, 5);
$balok3 = new Balok(11, 10, 6);
$balok4 = new Balok(25, 17, 8);

// Menampilkan informasi Luas, Keliling, dan Volume untuk setiap objek
$balok1 = new Balok(29, 16, 7);
echo "Informasi Luas,Keliling,volume Balok 1: <br>";
echo "Luas Balok 1: " . $balok1->getLuas() . "<br>";
echo "Keliling Balok 1: " . $balok1->getKeliling() . "<br>";
echo "Volume Balok 1: " . $balok1->getVolume() . "<br><br>";

$balok2 = new Balok(15, 9, 5);
echo "Informasi Luas,Keliling,volume Balok 2: <br>";
echo "Luas Balok 2: " . $balok2->getLuas() . "<br>";
echo "Keliling Balok 2: " . $balok2->getKeliling() . "<br>";
echo "Volume Balok 2: " . $balok2->getVolume() . "<br><br>";

$balok3 = new Balok(11, 10, 6);
echo "Informasi Luas,Keliling,volume Balok 3: <br>";
echo "Luas Balok 3: " . $balok3->getLuas() . "<br>";
echo "Keliling Balok 3: " . $balok3->getKeliling() . "<br>";
echo "Volume Balok 3: " . $balok3->getVolume() . "<br><br>";

$balok4 = new Balok(25, 17, 8);
echo "Informasi Luas,Keliling,volume Balok 4: <br>";
echo "Luas Balok 4: " . $balok4->getLuas() . "<br>";
echo "Keliling Balok 4: " . $balok4->getKeliling() . "<br>";
echo "Volume Balok 4: " . $balok4->getVolume() . "<br><br>";
?>