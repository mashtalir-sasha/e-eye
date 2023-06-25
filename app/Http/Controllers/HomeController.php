<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'main' => \App\Models\Main::first(),
            'benefit' => \App\Models\Benefit::first(),
            'directions' => \App\Models\Direction::get(),
            'bpla' => \App\Models\Bpla::first(),
            'catalog' => \App\Models\Catalog::get(),
            'after' => \App\Models\After::first(),
            'about' => \App\Models\About::first(),
            'gallery' => \App\Models\Gallery::get(),
            'videos' => \App\Models\Video::get(),
            'contact' => \App\Models\Contact::first(),
        ]);
    }
}
