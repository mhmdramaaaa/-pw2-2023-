<?php

    class Car {
        // hak akses : public, private, protected
        // property
        public $brand;
        public $color;

        //method
        function getBrand() {
            return $this->brand;
        }

        function getColor() {
            return $this->color;
        }
    }

    // object
    $tesla = new Car();
    $supra = new Car();
    
    
    
    // set value / setter
    $supra->brand = 'Tesla';
    $tesla->brand = 'Supra';

    $tesla->color = 'silver';
    $supra->color = 'Merah';

    // echo
    echo $tesla->getBrand();

    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    
    echo $supra->getColor();





?>