<?php
namespace App\Controller;

class PostsController extends AppController
{
    public $pagination = [
        'limit' => 10,
        'order' => [
            'create' => 'desc'
        ]
    ];

    public function index()
    {
        $posts = $this->Posts->find('all');

        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, ['contain' => 'Users']);

        $this->set(compact('post'));
    }
}
