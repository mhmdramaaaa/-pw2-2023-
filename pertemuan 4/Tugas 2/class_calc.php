<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 */

class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this->bilangan1 = $bil1;
        $this->bilangan2 = $bil2;
    }

    public function tambah() {
        return $this->bilangan1 + $this->bilangan2;
    }

    public function kurang() {
        return $this->bilangan1 - $this->bilangan2;
    }

    public function bagi() {
        if ($this->bilangan2 != 0) {
            return $this->bilangan1 / $this->bilangan2;
        } else {
            return "Tidak dapat melakukan pembagian, karena pembagi adalah 0.";
        }
    }

    public function kali() {
        return $this->bilangan1 * $this->bilangan2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(100, 4);
echo "Pertambahan: " . $calculator->tambah() . "<br>";
echo "Pengurangan: " . $calculator->kurang() . "<br>";
echo "Pembagian: " . $calculator->bagi() . "<br>";
echo "Perkalian: " . $calculator->kali() . "<br>";
?>