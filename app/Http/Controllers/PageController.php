<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('HomePage');
    }

    public function list() {
        $movies = \App\Movie::all();
        // dd($movies);
        return view('list', compact('movies'));
    }
}
