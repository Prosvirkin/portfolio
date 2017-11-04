<?php

class contact extends Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $this->view->generate("ContactView.php", "TemplateView.php", "MainMenu.php");
    }
}