<?php

class admin extends Controller
{
    public function __construct()
    {
        $this->model = new adminModel();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->getWebsites();
        $posts = $this->model->getPosts();
        $this->view->generate("AdminView.php", "TemplateView.php", "adminMenu.php", $data, $posts);
    }

    public function edit($id)
    {
        $this->view->generate()
    }
}