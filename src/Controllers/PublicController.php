<?php

namespace App\Controllers;

class PostController {

    public function home(){
        $json = file_get_contents('posts.json');
        $posts = json_decode($json, true);
        view('home', compact('posts'));
    }
}