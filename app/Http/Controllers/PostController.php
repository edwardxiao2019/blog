<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{

    public function show(Post $post){

        return view("post/show", compact('post'));
    }

    public function create(){

        return view("post/create");
    }

    public function store(){

        //validate
        $this->validate(\request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:10',
        ]);

        $user_id = \Auth::id();
        $params = array_merge(request(['title','content']), compact('user_id'));
        Post::create($params);
        return redirect('/');
    }

    public function edit(Post $post){

        return view("post/edit",compact('post'));
    }

    public function update(Post $post){
        //validate
        $this->validate(request(),[
            'title'=>'required|string|max:100|min:3',
            'content'=>'required|string|min:10',
        ]);

        $this->authorize('update', $post);

        $post->title= request('title');
        $post->content= request('content');
        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function delete(Post $post){
        $this->authorize('delete', $post);
        $post->delete();
        return redirect('/');
    }

}
