<?php

class view
{
    public $templateView;

    function generate($contentView, $templateView, $menu, $data = null, $posts = null)
    {
        include 'application/views/' . $templateView;
    }

}