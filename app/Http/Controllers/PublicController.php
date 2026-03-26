<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
        ]);

        return redirect()->route('home')->with('success_message', 'Hai inserito correttamente il tuo post.');
    }

    public function index()
    {
        $posts = Post::all();

        return view('blog.index', compact('posts'));
    }
}
