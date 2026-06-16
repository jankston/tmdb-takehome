<?php

namespace App\Http\Controllers;

use Tmdb\Laravel\Facades\Tmdb;

abstract class MovieController
{
    public function index()
    {
        $movies = Tmdb::getMovies();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Tmdb::getMovie($id);
        return response()->json($movie);
    }
}
