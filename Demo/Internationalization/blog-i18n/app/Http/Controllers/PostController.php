<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.list', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(PostRequest $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->date = $request->input('date');
        $post->save();

        Session::flash('success', 'Tao bai Post thanh cong');
        return redirect()->route('posts.index');
    }
}
