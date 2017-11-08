<?php

class Route
{
    static function run()
    {
        $controllerName = "home";
        $actionName = "index";

        $request = explode("/", trim($_SERVER["REQUEST_URI"], "/"));

        // Controller
        if (!empty($request[0])) {
            $controllerName = $request[0];
        }

        // Action
        if (!empty($request[1])) {
            $actionName = $request[1];
        }

        $controllerPath = "application/controllers/" . ucfirst($controllerName) . "Controller.php";
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        } else {
            Route::ErrorPage404();
        }

        $modelName = $controllerName . "Model";
        $modelPath = "application/models/" . $modelName . ".php";
        if (file_exists($modelPath)) {
            require_once $modelPath;
        }

        if (!empty($request[2])) {
            $param = $request[2];
        }

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action($param);
        } else {
            Route::ErrorPage404();
        }
    }

    public function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . 'Error404');
    }

}
