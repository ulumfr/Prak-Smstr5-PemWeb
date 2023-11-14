<?php 
    namespace Controller;

    class Controller 
    {
        var $controllerName;
        var $controllerMethod;

        public function getControllerAttribut()
        {
            return [
                "ControllerName" => $this->controllerName,
                "Method" => $this->controllerMethod
            ];
        }
    }
?>