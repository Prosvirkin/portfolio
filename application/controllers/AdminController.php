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
        $this->view->generate("AdminView.php", "TemplateView.php", "AdminMenu.php", $data, $posts);
    }

    public function addWebsite()
    {
        $this->model->saveWebsite();
        $this->view->generate("AddWebsiteView.php", "TemplateView.php", "AdminMenu.php");
    }

    public function editWebsite($id)
    {
        $this->model->editWebsite($id);
        $this->view->generate("EditWebsite.php", "TemplateView.php", "AdminMenu.php");
    }

    public function deleteWebsite($id)
    {
        $this->model->deleteWebsite($id);
    }

    public function addPost()
    {
        $this->model->savePost();
        $this->view->generate("AddPostView.php", "TemplateView.php", "AdminMenu.php");
    }

    public function editPost($id)
    {
        $this->model->editPost($id);
        $this->view->generate("EditPost.php", "TemplateView.php", "AdminMenu.php");
    }

    public function deletePost($id)
    {
        $this->model->deletePost($id);
    }


}