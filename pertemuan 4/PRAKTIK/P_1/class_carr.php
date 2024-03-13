<?php
    class Car {
        // Property
        public $brand; 
        public $color;

        // Method
        function getBrand() {
            return $this->brand;
        }

        function getColor() {
            return $this->color;
        }
    }

    // Object
    $Porche = new Car();
    $Porche->brand = "PORCHE";
    $Porche->color = " WHITE LIGHT";

    $Lexus = new Car();
    $Lexus->brand = "LEXUS";
    $Lexus->color = " YELLOW ";
    
    echo $Porche->getBrand();
    echo $Porche->getColor();
    echo "<br><br>";
    echo $Lexus->getBrand();
    echo $Lexus->getColor();
?>