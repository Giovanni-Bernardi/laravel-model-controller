<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
        $movies = Movies::all();
        // dd($movies);
        return view('pages.home', compact('movies'));
    }

    public function movie($id)
    {
        $movie = Movies::findOrFail($id);
        // dd($movie);
        return view('pages.movie', compact('movie'));
    }
}
