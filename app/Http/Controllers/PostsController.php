<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   public function index() {
       /*
       $posts = Post::orderBy('created_at', 'asc')->get();
        */
    $posts = Post::latest()->get();

       return view('posts.index', compact('posts'));
   }
   public function show(Post $post) {

    return view('posts.show', compact('post'));
}
public function create() {
    return view('posts.create');
}
public function store() {
 // $post = new \App\Post;

/*
 $post->title = request('title');
 $post->body = request('body');

 // save it to the database

 $post->save();
*/
$this->validate(request(), [
    'title' => 'required|max:10',
    'body' => 'required'
]);
Post::create(request(['title', 'body']));
 
/*
 Post::create([
     'title' => request('title'),
     'body' => request('body')
 ]);
*/
 //and then redirect to the home page

 return redirect('/');

}
}
