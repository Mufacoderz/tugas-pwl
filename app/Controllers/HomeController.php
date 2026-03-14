<?php

require_once BASE_PATH . '/app/Core/Controller.php';

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'message' => 'Selamat datang di Mini MVC'
        ];

        $this->view('home/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Ini adalah halaman tentang Mini MVC yang kita bangun.'
        ];

        $this->view('home/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'admin@minimvc.local'
        ];

        $this->view('home/index', $data);
    }
}