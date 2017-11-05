<?php

class Error404 extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function index()
    {
        $this->view->generate("Error404.php", "TemplateView.php", "MainMenu.php");
    }
}