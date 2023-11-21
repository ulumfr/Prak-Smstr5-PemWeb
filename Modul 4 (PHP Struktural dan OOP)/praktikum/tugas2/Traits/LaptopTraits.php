<?php 
    namespace Traits;

    trait LaptopTraits
    {
        public function infoLaptop($merk){
            return [
                'Brand' => $merk->getBrand(),
                'Color' => $merk->getColor(),
                'Price' => $merk->getPrice(),
            ];
        }

        public function displayTitle()
        {
            echo "\n===== INFORMASI LAPTOP 2023 =====\n\n";
        }
    }
?>