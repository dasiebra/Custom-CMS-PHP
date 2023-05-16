<?php

namespace App\Controllers;

use App\BaseController;
use App\Request;
use App\Models\Post;




class HomeController extends BaseController {
    public function index(Request $index)
    {
        $post = new Post($this->db);
        $this->view->render('home', [
            'posts'=>$post->getPosts()
        ]);
        
    }
    
}
