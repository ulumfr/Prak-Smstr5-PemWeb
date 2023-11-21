<?php
    namespace Models;

    abstract class Laptop
    {
        public $brand;
        public $color;
        public $price;

        abstract public function getSpecs(): array;

        public function __construct($brand, $color, $price)
        {
            $this->brand = $brand;
            $this->color = $color;
            $this->price = $price;
        }

        public function getBrand()
        {
            return $this->brand;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getPrice()
        {
            return $this->price;
        }
    }
?>