<?php
namespace App\Controller;

class PostsController extends AppController
{
    public function index()
    {
        $posts = $this->Posts->find('all');

        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $this->set(compact(['id']));
    }
}
