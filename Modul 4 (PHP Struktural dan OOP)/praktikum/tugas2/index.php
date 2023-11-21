<?php 
    include 'Controller/LaptopController.php';
    include 'Models/AcerLaptop.php';
    include 'Models/AsusLaptop.php';
    include 'Models/LenovoLaptop.php';

    use Models\AcerLaptop;
    use Models\AsusLaptop;
    use Models\LenovoLaptop;
    use Controller\LaptopController;

    $controller = new LaptopController();

    $asus = new AsusLaptop('Asus Zenbook Pro 14 OLED', 'Black', 35000000);
    $acer = new AcerLaptop('Acer Swift X 14 Ultrathin', 'Black', 25000000);
    $lenovo = new LenovoLaptop('Lenovo Legion Pro 7i', 'Black', 39000000);

    $controller->displayTitle();
    $controller->showInfoLaptop($asus);
    $controller->showInfoLaptop($acer);
    $controller->showInfoLaptop($lenovo);
?>