<?php

class Posts extends Controller
{

     public function postagens()
    {

        $this->view('posts/postagens');
    }


    public function criar()
    {
        $this->view('posts/criar');
    } 
    public function ver()
    {
        $this->view('posts/ver');
    }
}
