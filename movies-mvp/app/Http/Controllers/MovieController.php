<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::list();
        return view('welcome', compact('movies'));
    }

    public function show(Movie $movie)
    {
        $movies = Movie::list();
        return $movies;
    }
}
