<?php

class home extends Controller
{
    public function index()
    {

       $this->view->generate("MainView.php", "TemplateView.php", "MainMenu.php");
    }
}