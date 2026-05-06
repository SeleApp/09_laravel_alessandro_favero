<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(MovieRequest $request)
    {
        $validated = $request->validated();
        $validated['img'] = $request->file('img')->store('public/images');

        Movie::create($validated);

        return redirect()->route('home')->with('success_message', 'Hai inserito correttamente il tuo film.');
    }

    public function index()
    {
        $movies = Movie::all();

        return view('blog.index', compact('movies'));
    }
}
