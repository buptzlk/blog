<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::with('tag', 'user')->paginate(3);
        $tag = Tag::get();
        return view('home', ['data' => $data, 'tag' => $tag]);
    }
}
