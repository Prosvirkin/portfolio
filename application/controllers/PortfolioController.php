<?php

class portfolio extends Controller
{
    function __construct()
    {
        $this->model = new portfolioModel();
        $this->view = new View();
    }

    function index()
    {
      $data = $this->model->getWebsites();
      $this->view->generate("PortfolioView.php", "TemplateView.php", "MainMenu.php", $data);
    }
}