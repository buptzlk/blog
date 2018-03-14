<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Auth;
use App\User as Users;

class User extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Article::with('tag', 'user')->where('user_id', $id)->paginate();
        $user = Users::findOrFail($id);
        return view('user', ['data' => $data, 'total' => $data->total(), 'user' => $user]);
    }
}
