<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'gallery' => \App\Models\Gallery::get(),
            'videos' => \App\Models\Video::get(),
        ]);
    }
}
