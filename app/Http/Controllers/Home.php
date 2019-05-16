<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        $posts = Posts::all();
        return view('homepage', compact('posts'));
    }
}
