<?php

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        ob_start();
        require BASE_PATH . "/app/Views/" . $view . ".php";
        $content = ob_get_clean();

        require BASE_PATH . "/app/Views/layouts/main.php";
    }
}