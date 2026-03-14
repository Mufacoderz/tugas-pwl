<?php

class Router
{
    private static array $routes = [];

    public static function get(string $path, string $handler): void
    {
        self::$routes['GET'][$path] = $handler;
    }

    public static function post(string $path, string $handler): void
    {
        self::$routes['POST'][$path] = $handler;
    }

    public static function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];

        // Ambil path bersih dari REQUEST_URI
        $requestUri = $_SERVER['REQUEST_URI'];
        $scriptDir  = dirname($_SERVER['SCRIPT_NAME']);
        $path = str_replace($scriptDir, '', $requestUri);

        // Hapus query string jika ada
        $path = strtok($path, '?');
        $path = '/' . trim($path, '/');

        $routes = self::$routes[$method] ?? [];

        // Cari route yang cocok (termasuk dynamic segment seperti {id})
        foreach ($routes as $route => $handler) {
            $pattern = preg_replace('/\{[^}]+\}/', '([^/]+)', $route);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches); 
                self::dispatch($handler, $matches);
                return;
            }
        }

        http_response_code(404);
        echo "404 - Halaman tidak ditemukan";
    }

    private static function dispatch(string $handler, array $params = []): void
    {
        [$controllerName, $action] = explode('@', $handler);

        $controllerFile = BASE_PATH . '/app/Controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            http_response_code(404);
            echo "404 - Controller '$controllerName' tidak ditemukan";
            return;
        }

        require_once $controllerFile;

        if (!class_exists($controllerName)) {
            http_response_code(500);
            echo "500 - Class '$controllerName' tidak ditemukan";
            return;
        }

        $obj = new $controllerName();

        if (!method_exists($obj, $action)) {
            http_response_code(404);
            echo "404 - Method '$action' tidak ditemukan di $controllerName";
            return;
        }

        call_user_func_array([$obj, $action], $params);
    }
}