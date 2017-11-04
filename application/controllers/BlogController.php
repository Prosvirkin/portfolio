<?php

class Blog extends Controller
{
    function __construct()
    {
        $this->model = new BlogModel();
        $this->view = new View();
    }

    function index()
    {
        $data = $this->model->getPosts();
        $this->view->generate("BlogView.php", "TemplateView.php", "MainMenu.php", $data);
    }

    function post($id)
    {
       $data = $this->model->getFullPost($id);
       $this->view->generate("PostView.php", "TemplateView.php", "MainMenu.php", $data);
    }

}