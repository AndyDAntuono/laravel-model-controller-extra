<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Passa i film alla vista
        return view('movies.index', compact('movies'));
    }
}
