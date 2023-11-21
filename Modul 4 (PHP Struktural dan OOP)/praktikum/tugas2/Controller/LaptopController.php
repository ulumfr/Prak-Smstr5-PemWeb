<?php
    namespace Controller;

    include 'Traits/LaptopTraits.php';
    include 'Models/Laptop.php';

    use Models\Laptop;
    use Traits\LaptopTraits;

    class LaptopController
    {
        use LaptopTraits;
        
        public function title()
        {
            $this->displayTitle();
        }

        public function showInfoLaptop(Laptop $merk)
        {
            $information = $this->infoLaptop($merk);
        
            $this->display("Brand: " . $information['Brand']);
            $this->display("Color: " . $information['Color']);
            $this->display("Price: Rp " . $information['Price'] . "\n");
        }

        public function display($information)
        {
            echo $information . "\n";
        }
    }
?>