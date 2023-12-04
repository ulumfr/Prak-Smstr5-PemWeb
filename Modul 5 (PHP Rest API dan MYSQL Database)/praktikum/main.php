<?php 
    header('Content-Type: application/json; charset=UTF-8');

    include 'app/Routes/HotelRoutes.php';
    include 'app/Routes/RoomRoutes.php';

    use app\Routes\HotelRoutes;
    use app\Routes\RoomRoutes;

    $method = $_SERVER['REQUEST_METHOD'];
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $hotelRoutes = new HotelRoutes();
    $hotelRoutes->handle($method, $path);

    $roomRoutes = new RoomRoutes();
    $roomRoutes->handle($method, $path);
    
    // php -S localhost:8000 main.php
?>
