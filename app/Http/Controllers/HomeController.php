<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['posts'] = Blog::latest()->get();
        return view('home', $data);
    }
}
