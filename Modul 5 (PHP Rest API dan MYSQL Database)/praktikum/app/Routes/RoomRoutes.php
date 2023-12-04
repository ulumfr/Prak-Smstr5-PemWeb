<?php
    namespace app\Routes;

    include 'app/Controller/RoomController.php';
    use app\Controller\RoomController;

    class RoomRoutes 
    {
        public function handle($method, $path)
        {
            if ($method === 'GET' && $path === '/api/room')
            {
                $controller = new RoomController();
                echo $controller->index();
            }

            if ($method === 'GET' && strpos($path, '/api/room/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];

                $controller = new RoomController();
                echo $controller->getById($id);
            }
            
            if ($method === 'POST' && $path === '/api/room')
            {
                $controller = new RoomController();
                echo $controller->insert();
            }
            
            if ($method === 'PUT' && strpos($path, '/api/room/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];
    
                $controller = new RoomController();
                echo $controller->update($id);
            }

            if ($method === 'DELETE' && strpos($path, '/api/room/') === 0)
            {
                $parthParts = explode('/', $path);
                $id = $parthParts[count($parthParts) - 1];
    
                $controller = new RoomController();
                echo $controller->delete($id);
            }
        }
    }
?>