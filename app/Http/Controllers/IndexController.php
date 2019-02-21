<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index(){

        $posts = Post::orderby('created_at','desc')->paginate(6);

        return view("post/index",compact('posts'));
    }
}
