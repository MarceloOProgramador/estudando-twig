<?php

namespace App\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class HomeController {
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader('views');
        $this->twig = new Environment($loader);
    }

    public function index()
    {
        $template = $this->twig->load('index.twig');
        echo $template->render();
    }
    
}
