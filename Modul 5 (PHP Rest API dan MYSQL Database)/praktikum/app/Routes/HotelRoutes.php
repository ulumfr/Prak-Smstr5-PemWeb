<?php
    namespace app\Routes;

    include 'app/Controller/HotelController.php';

    use app\Controller\HotelController;

    class HotelRoutes 
    {
        public function handle($method, $path)
        {
            if ($method === 'GET' && $path === '/api/hotel')
            {
                $controller = new HotelController();
                echo $controller->index();
            }

            if ($method === 'GET' && strpos($path, '/api/hotel/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];

                $controller = new HotelController();
                echo $controller->getById($id);
            }
            
            if ($method === 'POST' && $path === '/api/hotel')
            {
                $controller = new HotelController();
                echo $controller->insert();
            }
            
            if ($method === 'PUT' && strpos($path, '/api/hotel/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];
    
                $controller = new HotelController();
                echo $controller->update($id);
            }

            if ($method === 'DELETE' && strpos($path, '/api/hotel/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];
    
                $controller = new HotelController();
                echo $controller->delete($id);
            }
        }
    }
?>