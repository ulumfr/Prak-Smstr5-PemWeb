<?php 
    namespace Models;

    class AcerLaptop extends Laptop
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