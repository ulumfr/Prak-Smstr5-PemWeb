<?php 
    namespace Models;

    class LenovoLaptop extends Laptop
    {
        public function getSpecs(): array
        {
            return [
                'Brand' => $this->brand,
                'Color' => $this->color,
                'Price' => $this->price,
            ];
        }
    }
?>