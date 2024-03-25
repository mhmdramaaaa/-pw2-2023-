<?php

class Pakaian {
    protected $jenis;
    protected $ukuran;
    protected $brand;

    public function __construct($jenis, $ukuran, $brand) {
        $this->jenis = $jenis;
        $this->ukuran = $ukuran;
        $this->brand = $brand;
    }

    public function getInfo() {
        return "Jenis: {$this->jenis} <br> Ukuran: {$this->ukuran} <br> Brand: {$this->brand} <br>";
    }
}

class Baju extends Pakaian {
    private $warna;

    public function __construct($jenis, $ukuran, $warna, $brand) {
        parent::__construct($jenis, $ukuran, $brand);
        $this->warna = $warna;
    }

    public function getInfo() {
        return parent::getInfo() . " Warna: {$this->warna}";
    }
}

class Celana extends Pakaian {
    private $model;

    public function __construct($jenis, $ukuran, $model, $brand) {
        parent::__construct($jenis, $ukuran, $brand);
        $this->model = $model;
    }

    public function getInfo() {
        return parent::getInfo() . " Model: {$this->model}";
    }
}

class Jaket extends Pakaian {
    private $bahan;

    public function __construct($jenis, $ukuran, $bahan, $brand) {
        parent::__construct($jenis, $ukuran, $brand);
        $this->bahan = $bahan;
    }

    public function getInfo() {
        return parent::getInfo() . " Bahan: {$this->bahan}";
    }
}

?>
