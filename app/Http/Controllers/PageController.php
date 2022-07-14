<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
class PageController extends Controller
{
    public function index(){
        return view('template.HomePage');
    }

    public function list() {
        $movies = Movie::all();
        // dd($movies);
        return view('list', compact('movies'));
    }
}
